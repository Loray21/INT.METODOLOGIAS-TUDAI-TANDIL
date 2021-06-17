'use strict';

let editButton = document.querySelectorAll('.editBtn');
let updateMaterialModal = document.querySelector('.showModalUpdate');
let iconClose = document.querySelectorAll('.iconClose');

function addCloseListener() {
    for(let i=0; i<iconClose.length; i++) {
        iconClose[i].addEventListener('click', () => {
            updateMaterialModal.classList.add('showModalUpdate');
        });
    }
}

function addUpdateButtonListeners() {
    for(let i=0; i<editButton.length; i++) {

        let element = editButton[i];

        element.addEventListener('click', () => {
            let materialId = element.getAttribute('materialId');
            let materialName = element.getAttribute('materialName');
            let materialAccepted = element.getAttribute('materialAccepted');
            updateMaterialModal.classList.toggle('showModalUpdate');
            let id = document.querySelector('#materialId');
            let name = document.querySelector('#materialName');
            let accepted = document.querySelector('#materialAccepted');
            id.value = materialId;
            name.value = materialName;
            accepted.value = materialAccepted;
        });
    }
}

addCloseListener();
addUpdateButtonListeners();
