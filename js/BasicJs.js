document.addEventListener('DOMContentLoaded', function (e) {
	let elements = document.querySelectorAll('div[id]');
	let elementsArray = Array.from(elements);
	debugger;
	const fragment = document.createDocumentFragment();
	for (let i = 4; i < elementsArray.length; i++) {
		//Create new div
		const newElement = document.createElement('div');
		newElement.className = 'insideHeaderDiv';
		// Add class to parent div
		elementsArray[i].classList.add('headerDiv');
		// Get the first child node of an element
		let item = elementsArray[i].childNodes[0];
		//Duplicate it
		fragment.appendChild(item);
		elementsArray[i].appendChild(fragment);
		// Replace it with the new element
		item.replaceChild(newElement, item.childNodes[0]);
	}
});
