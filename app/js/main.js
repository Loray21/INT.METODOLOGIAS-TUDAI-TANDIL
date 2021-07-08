'use strict';

// Materiales
let editButton = document.querySelectorAll('.editBtn');
let updateMaterialModal = document.querySelector('.showModalUpdate');
let iconCloseModalUpdateMaterial = document.querySelectorAll('.iconClose');

// Cartonero
let editCartoneroBtn = document.querySelectorAll('.editCartoneroBtn');
let updateCartoneroModal = document.querySelector('.updateCartoneroModal');
let iconCloseModalUpdateCartonero = document.querySelectorAll('.iconCloseUpdateCartonero');


function addCloseListener() {
    for(let i=0; i<iconCloseModalUpdateMaterial.length; i++) {
        iconCloseModalUpdateMaterial[i].addEventListener('click', () => {
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

function addCloseListenerUpdateCartonero() {
    for(let i=0; i<iconCloseModalUpdateCartonero.length; i++) {
        console.log(iconCloseModalUpdateCartonero[i]);
        iconCloseModalUpdateCartonero[i].addEventListener('click', () => {
            updateCartoneroModal.classList.add('updateCartoneroModal');
        });
    }
}

function addUpdateCartoneroButtonListeners() {
    for(let i=0; i<editCartoneroBtn.length; i++) {

        let element = editCartoneroBtn[i];

        element.addEventListener('click', () => {
            let cartoneroName = element.getAttribute('cartoneroName');
            let cartoneroSurname = element.getAttribute('cartoneroSurname');
            let cartoneroDocument = element.getAttribute('cartoneroDocument');
            let cartoneroHorario = element.getAttribute('cartoneroHorario');
            let cartoneroAddress = element.getAttribute('cartoneroAddress');
            let cartoneroPhone = element.getAttribute('cartoneroPhone');
            let cartoneroVehicle = element.getAttribute('cartoneroVehicle');

            updateCartoneroModal.classList.toggle('updateCartoneroModal');

            let name = document.querySelector('#cartoneroName');
            let surname = document.querySelector('#cartoneroSurname');
            console.log(cartoneroDocument);
            let dni = document.querySelector('#cartoneroDocument');
            let hour = document.querySelector('#cartoneroHorario');
            let address = document.querySelector('#cartoneroAddress');
            let phone = document.querySelector('#cartoneroPhone');
            let vehicle = document.querySelector('#cartoneroVehicle');

            name.value = cartoneroName;
            surname.value = cartoneroSurname;
            dni.value = cartoneroDocument;
            hour.value = cartoneroHorario;
            address.value = cartoneroAddress;
            phone.value = cartoneroPhone;
            vehicle.value = cartoneroVehicle;
        });
    }
}

addCloseListener();
addUpdateButtonListeners();
addCloseListenerUpdateCartonero();
addUpdateCartoneroButtonListeners();
