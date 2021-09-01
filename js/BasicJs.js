document.addEventListener('DOMContentLoaded', function (e) {
	let elements = document.querySelectorAll('div[id]');

	for (let i = 4; i < elements.length; i++) {
		//Create new div
		const newElement = document.createElement('div');
		newElement.className = 'insideHeaderDiv';
		// Add class to parent div
		elements[i].classList.add('headerDiv');
		//Get second child
		let item = elements[i].childNodes[1];
		// Insert new div before second child
		elements[i].insertBefore(newElement, item);
	}
});
