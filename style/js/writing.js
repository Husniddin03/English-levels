// import { marked } from 'marked';
// import axios from 'axios';

const DEEPSEEK_API_KEY = '48ba6dc6-533b-4678-a202-995208ef3868'; // Replace with your API key
const WRITING_PROMPTS = {
    B1: {
        essay: "Write about your favorite holiday and why you enjoy it. | Sevimli bayramingiz haqida va nima uchun uni yoqtirishingiz haqida yozing.",
        letter: "Write a letter to a friend about your recent vacation. | Do'stingizga yaqinda dam olganingiz haqida xat yozing.",
        report: "Write a report about a local event you attended. | Siz qatnashgan mahalliy tadbir haqida hisobot yozing.",
        article: "Write an article about your hometown. | Tug'ilib o'sgan shahringiz haqida maqola yozing."
    },
    B2: {
        essay: "Discuss the advantages and disadvantages of working from home. | Uydan ishlashning afzalliklari va kamchiliklari haqida muhokama qiling.",
        letter: "Write a formal letter to apply for a job. | Ish uchun rasmiy ariza xati yozing.",
        report: "Write a report analyzing the environmental issues in your city. | Shahringizdagi ekologik muammolarni tahlil qiluvchi hisobot yozing.",
        article: "Write an article about the impact of social media on society. | Ijtimoiy tarmoqlarning jamiyatga ta'siri haqida maqola yozing."
    },
    C1: {
        essay: "Evaluate the effectiveness of current education systems. | Zamonaviy ta'lim tizimlarining samaradorligini baholang.",
        letter: "Write a letter to a newspaper editor about a controversial local issue. | Mahalliy munozarali masala bo'yicha gazeta muharririga xat yozing.",
        report: "Write a detailed report analyzing economic trends in your country. | Mamlakatingizdagi iqtisodiy tendentsiyalarni tahlil qiluvchi batafsil hisobot yozing.",
        article: "Write an article discussing technological innovation's impact on employment. | Texnologik innovatsiyalarning bandlikka ta'siri haqida maqola yozing."
    }
};

let timer;
let timeLeft = 1800; // 30 minutes

function updateTimer() {
    const minutes = Math.floor(timeLeft / 60);
    const seconds = timeLeft % 60;
    document.getElementById('timer').textContent =
        `${minutes.toString().padStart(2, '0')}:${seconds.toString().padStart(2, '0')}`;

    if (timeLeft === 0) {
        clearInterval(timer);
        document.getElementById('submitBtn').click();
    } else {
        timeLeft--;
    }
}

function startTimer() {
    clearInterval(timer);
    timeLeft = 1800;
    timer = setInterval(updateTimer, 1000);
}

function updateWordCount() {
    const text = document.getElementById('writingInput').value;
    const wordCount = text.trim().split(/\s+/).filter(word => word.length > 0).length;
    document.getElementById('wordCount').textContent = wordCount;
}

async function assessWriting(text, level, taskType) {
    try {
        const prompt = `As a CEFR writing examiner, assess this ${level} level ${taskType} text in English and Uzbek:

${text}

Provide a detailed assessment including:
1. Grammar accuracy (0-10)
2. Vocabulary range (0-10)
3. Coherence and cohesion (0-10)
4. Overall score (0-10)
5. Detailed feedback in both English and Uzbek`;

        const response = await axios.post('https://api.deepseek.com/v1/chat/completions', {
            model: 'deepseek-chat',
            messages: [{
                role: 'user',
                content: prompt
            }],
            temperature: 0.7
        }, {
            headers: {
                'Authorization': `Bearer ${DEEPSEEK_API_KEY}`,
                'Content-Type': 'application/json'
            }
        });

        return response.data.choices[0].message.content;
    } catch (error) {
        console.error('Assessment error:', error);
        return 'Error processing assessment | Baholashda xatolik yuz berdi';
    }
}

function updatePrompt() {
    const level = document.getElementById('levelSelect').value;
    const taskType = document.getElementById('taskSelect').value;
    document.getElementById('taskPrompt').textContent = WRITING_PROMPTS[level][taskType];
    startTimer();
}

document.getElementById('levelSelect').addEventListener('change', updatePrompt);
document.getElementById('taskSelect').addEventListener('change', updatePrompt);
document.getElementById('writingInput').addEventListener('input', updateWordCount);

document.getElementById('submitBtn').addEventListener('click', async () => {
    const text = document.getElementById('writingInput').value;
    const level = document.getElementById('levelSelect').value;
    const taskType = document.getElementById('taskSelect').value;

    if (text.trim().length < 50) {
        alert('Please write more content | Ko\'proq matn yozing');
        return;
    }

    document.getElementById('submitBtn').disabled = true;
    document.getElementById('submitBtn').textContent = 'Assessing... | Baholanmoqda...';

    const assessment = await assessWriting(text, level, taskType);

    // Parse assessment results and update UI
    const feedback = document.getElementById('feedback');
    feedback.classList.remove('hidden');

    // Example parsing - adjust based on actual API response format
    const scores = {
        grammar: 8,
        vocabulary: 7,
        coherence: 8,
        overall: 7.7
    };

    document.getElementById('grammarScore').textContent = scores.grammar;
    document.getElementById('vocabScore').textContent = scores.vocabulary;
    document.getElementById('coherenceScore').textContent = scores.coherence;
    document.getElementById('overallScore').textContent = scores.overall;
    document.getElementById('detailedFeedback').innerHTML = marked(assessment);

    document.getElementById('submitBtn').disabled = false;
    document.getElementById('submitBtn').textContent = 'Submit for Assessment | Baholash uchun yuborish';
});

// Initialize the prompt
updatePrompt();