let currentFeedbackIndex = 0;

function scrollToBottom() {
    window.scrollTo({
        top: document.body.scrollHeight,
        behavior: 'smooth'
    });
}

const feedbacks = [
    { username: "John Mark Monsanto", date: "2023-07-24", feedback: "This is a fantastic resource for anyone planning a trip to the Philippines, offering a comprehensive and engaging experience. The website boasts detailed guides, stunning photography, and local insights, making it easy to discover hidden gems and plan unforgettable adventures. The user-friendly interface allows for effortless navigation, while interactive features like maps and itineraries enhance the planning process. While expanding accommodation options and refining the search functionality would be beneficial, Advensure remains a valuable tool for exploring the beauty and diversity of the Philippines." },

    { username: "Sarah Marie Ellevera", date: "2023-02-09", feedback: "Advensure is a breath of fresh air in the world of travel websites, offering a unique and immersive experience for adventurers of all stripes. The site's focus on off-the-beaten-path destinations and unique experiences sets it apart, showcasing hidden gems and local cultures often overlooked by mainstream travel guides. Advensure's user-friendly interface makes it easy to explore diverse destinations, while detailed itineraries, interactive maps, and stunning photography bring the adventure to life. While the site could benefit from a wider range of accommodation options and more detailed information on local customs, Advensure is a valuable resource for anyone seeking an authentic and unforgettable travel experience." },

    { username: "Travis Scott Clemente", date: "2023-09-15", feedback: "A unique and immersive experience awaits adventurers on this refreshing travel website. The site's focus on off-the-beaten-path destinations and unique experiences sets it apart, showcasing hidden gems and local cultures often overlooked by mainstream travel guides. For example, the site offers guided tours led by local experts, adventure activities like trekking and kayaking, and cultural immersion programs that allow travelers to experience local traditions firsthand. The user-friendly interface makes it easy to explore diverse destinations, while detailed itineraries, interactive maps, and stunning photography bring the adventure to life. While the site could benefit from a wider range of accommodation options, including more budget-friendly hostels and luxury resorts, and more detailed information on local customs, such as local etiquette, dress codes, and cultural sensitivities, it is a valuable resource for anyone seeking an authentic and unforgettable travel experience." },

    // Add more feedback objects as needed
];

function displayFeedback(index) {
    const feedbackPlaceholder = document.querySelector('.feedback-placeholder');
    const feedback = feedbacks[index];
    feedbackPlaceholder.querySelector('.username').textContent = feedback.username;
    feedbackPlaceholder.querySelector('.upload-date').textContent = feedback.date;
    feedbackPlaceholder.querySelector('.feedback-text').textContent = feedback.feedback;
}

function moveFeedback(direction) {
    currentFeedbackIndex += direction;
    if (currentFeedbackIndex < 0) {
        currentFeedbackIndex = feedbacks.length - 1;
    } else if (currentFeedbackIndex >= feedbacks.length) {
        currentFeedbackIndex = 0;
    }
    displayFeedback(currentFeedbackIndex);
}

// Initial display
displayFeedback(currentFeedbackIndex);