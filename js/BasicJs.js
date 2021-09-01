document.addEventListener('DOMContentLoaded', function (e) {
	debugger;
	let elements = document.querySelectorAll('div[id]');
	// let elementsArray = Array.from(elements);
	// let elemenay.from(elements);

	const fragment = document.createDocumentFragment();

	for (let i = 4; i < elementsArray.length; i++) {
		//Create new div
		const newElement = document.createElement('div');
		newElement.className = 'insideHeaderDiv';
		// Add class to parent div
		elements[i].classList.add('headerDiv');
		//Get second child
		let item = elements[i].childNodes[1];
		// Insert new div before second child
		elements[i].insertBefore(newElement, item);
		// //Duplicate it
		// fragment.appendChild(item);
		// elementsArray[i].appendChild(fragment);
		// // Replace it with the new element
		// item.replaceChild(newElement, item.childNodes[1]);
	}
});
