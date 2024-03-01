// Variables de formulario de cotización
const validityDaysInput = document.querySelector('.validity-days');

// Variables del formulario de concepto
const idConceptInput = document.querySelector("#idConcept");
const descriptioninput = document.querySelector("#description");
const quantityInput = document.querySelector("#quantity");
const utilityInput = document.querySelector("#utility");
const unitPriceInput = document.querySelector("#unit_price");
const unitPriceCustomerInput = document.querySelector('#unitPriceCustomer');
const totalPriceCustomerInput = document.querySelector('#totalPriceCustomer');

let editando;

const customerForm = document.querySelector('#customerForm');
const addConceptForm = document.querySelector("#addConceptForm");
const btnSubmitConcept = document.querySelector(".btn-submit-concept");
const btnShowAdd = document.querySelector("#btnShowAdd");
const btnCancel = document.querySelector(".btn-concept-cancel");

//Initialize Select2 Elements
$.fn.select2.defaults.set("language", "es");
$(".select2").select2();
$("#customer_id").val(null).trigger("change");

$('#customer_id').select2({
  minimumInputLength: 2,
  placeholder: "SELECCIONAR CLIENTE",
  allowClear: true,

  ajax: {
    url: BASE_URL + "inventory/computo/select2-customers/",
    type: "post",
    dataType: "json",
    delay: 1000,
    data: function (params) {
      return {
        searchTerm: params.term, // search term
      };
    },
    processResults: function (response) {
      return {
        results: response,
      };
    },

    cache: true,
  }, // end call ajax
}); // end select2 for customer

// DataTable
let quotationTable = $("#quotationTable").DataTable({
  destroy: true,
  //data: conceptList,
  columns: [
    { data: "description" },
    { data: "quantity" },
    { data: "utility" },
    { data: "unitPrice" },
    { data: "amount" },
    { data: "actions" },
  ],
  responsive: true,
  autoWidth: false,
  orders: [],
  language: {
    url: BASE_URL + "custom/plug-ins/datatables/1.10.25/spanish_mx.json",
  },
});

class Concepts {
  constructor() {
    this.concepts = JSON.parse(sessionStorage.getItem("concepts")) || [];
  }

  addConcept(concept) {
    this.concepts = [...this.concepts, concept];
  }

  editConcept(conceptUpdated) {
    this.concepts = this.concepts.map((concept) =>
      concept.id === conceptUpdated.id ? conceptUpdated : concept
    );
  }

  deleteConcept(id) {
    this.concepts = this.concepts.filter((concept) => concept.id !== id);
  }

  getConcept(id) {
    return this.concepts.filter((concept) => concept.id === id);
  }

  syncStorage() {
    sessionStorage.setItem("concepts", JSON.stringify(this.concepts));
  }

  deleteAllConcepts() {
    this.concepts = [];
    this.syncStorage();
  }
}

class UI {
  printConcepts({ concepts }) {
    this.clearTable();

    if (concepts.length > 0) {
      concepts.forEach((concept) => {
        const {
          id,
          description,
          quantity,
          utility,
          unitPrice,
          amount,
          actions,
        } = concept;

        quotationTable.row
          .add({
            id: id,
            description: description,
            quantity: quantity,
            utility: utility,
            unitPrice: Number((unitPrice * (utility / 100) + unitPrice) * 1.16).toFixed(2),
            amount: Number((amount * 1.16)).toFixed(2),
            actions: `
            <i class="fas fa-edit font-weight-bold text-primary mr-3" style="cursor: pointer;" onclick='editConcept(\"${id}\")'></i>
            <i class="fas fa-trash-alt font-weight-bold text-danger" style="cursor: pointer;" onclick='deleteConcept(\"${id}\")'></i>
            `,
          })
          .draw();
      });
    }
  }

  clearTable() {
    quotationTable.clear().draw();
  }
}

const ui = new UI();
const conceptsManager = new Concepts();

// Event Listeners
eventListeners();

function eventListeners() {
  idConceptInput.addEventListener("input", dataConcept);
  descriptioninput.addEventListener("input", dataConcept);
  quantityInput.addEventListener("input", dataConcept);
  utilityInput.addEventListener("input", dataConcept);
  unitPriceInput.addEventListener("input", dataConcept);

  // Calcultar el precio unitario para el cliente
  quantityInput.addEventListener('input', unitPriceCustomer);
  utilityInput.addEventListener('input', unitPriceCustomer);
  unitPriceInput.addEventListener('input', unitPriceCustomer);

  // Calcultar el total de un concepto para el cliente
  quantityInput.addEventListener('input', totalPriceCustomer);
  utilityInput.addEventListener('input', totalPriceCustomer);
  unitPriceInput.addEventListener('input', totalPriceCustomer);

  addConceptForm.addEventListener("submit", sendForm);
  customerForm.addEventListener('submit', validateCustomerForm);

  btnShowAdd.addEventListener("click", () => {
    enableAddMode();
  });

  btnCancel.addEventListener("click", () => {
    disableEditMode();
  });

  // Cuando el documento esta listo
  ui.printConcepts(conceptsManager);
}

const conceptObj = {
  id: "",
  description: "",
  quantity: "",
  utility: "",
  unitPrice: "",
  amount: "",
  actions: "",
};

function dataConcept(e) {
  conceptObj[e.target.name] = isNaN(e.target.value)
    ? e.target.value
    : Number(e.target.value);
}

function sendForm(e) {
  e.preventDefault();

  // Extraer la información del objeto concepto
  const { description, quantity, utility, unitPrice } = conceptObj;

  if (
    description === "" ||
    quantity === "" ||
    utility === "" ||
    unitPrice === ""
  ) {
    Swal.fire({
      icon: "warning",
      title: "Oops...",
      showConfirmButton: false,
      text: "Todos los campos son requeridos.",
      timer: 1500,
    });

    return;
  }

  if (editando) {
    // Calcular el importe
    conceptObj.amount = ((unitPrice * utility) / 100 + unitPrice) * quantity;

    // Pasar el objeto del concepto a edición
    conceptsManager.editConcept({ ...conceptObj });

    // Regresar el texto del botón a su estado original
    addConceptForm.querySelector('input[type="submit"]').value = "Añadir";

    // Salir del modo edición
    editando = false;
  } else {
    // Generar ID único
    conceptObj.id = uuidv4();

    // Calcular el importe
    conceptObj.amount = ((unitPrice * utility) / 100 + unitPrice) * quantity;

    // Guardar una copia del objeto conceptObj en concepts
    conceptsManager.addConcept({ ...conceptObj });
  }

  // Reiniciar el objeto para la validación
  resetConceptObj();

  // Reiniciar el formulario
  addConceptForm.reset();

  // Sincronizar con sessionStorage
  conceptsManager.syncStorage();

  // Dibujar lista de conceptos
  ui.printConcepts(conceptsManager);
}

function resetConceptObj() {
  conceptObj.id = "";
  conceptObj.description = "";
  conceptObj.quantity = "";
  conceptObj.utility = "";
  conceptObj.unitPrice = "";
  conceptObj.amount = "";
  conceptObj.actions = "";
}

function editConcept(id) {
  const concept = conceptsManager.getConcept(id);
  const { description, quantity, utility, unitPrice } = concept[0];

  // Llenar los campos del formulario
  descriptioninput.value = description;
  quantityInput.value = quantity;
  utilityInput.value = utility;
  unitPriceInput.value = unitPrice;

  // Llenar el objeto
  conceptObj.id = id;
  conceptObj.description = description;
  conceptObj.quantity = quantity;
  conceptObj.utility = utility;
  conceptObj.unitPrice = unitPrice;

  // Cambiar el texto del botón
  enableEditMode();

  // Volver a calcular previos
  unitPriceCustomer();
  totalPriceCustomer();
}

function deleteConcept(id) {
  // Eliminar el producto
  conceptsManager.deleteConcept(id);

  // Sincronizar sessionStorage
  conceptsManager.syncStorage();

  // Refrescar las citas
  ui.printConcepts(conceptsManager);
}

function enableAddMode() {
  editando = false;
  addConceptForm.querySelector('input[type="submit"]').value = "Añadir";
  $(".customerDiv").hide("slow"); // Ocultar contenedor con información del cliente
  $(".addConcept").show("slow"); // Mostrar formulario de concepto

  resetConceptObj(); // Limpiar los datos del objeto
  addConceptForm.reset(); // Limpiar campos del formulario
}

function enableEditMode() {
  editando = true;
  addConceptForm.querySelector('input[type="submit"]').value =
    "Guardar cambios";
  $(".customerDiv").hide("slow"); // Ocultar contenedor con información del cliente
  $(".addConcept").show("slow"); // Mostrar formulario de concepto
}

function disableEditMode() {
  editando = false;
  addConceptForm.querySelector('input[type="submit"]').value = "Añadir";
  $(".customerDiv").show("slow"); // Mostrar contenedor con información del cliente
  $(".addConcept").hide("slow"); // Ocultar formulario de concepto

  resetConceptObj(); // Limpiar los datos del objeto
  addConceptForm.reset(); // Limpiar campos del formulario
}

function validateCustomerForm(event) {
  event.preventDefault();
  event.stopPropagation();

  customerForm.classList.add('was-validated');

  if(customerForm.checkValidity() === false) {
    return;
  }

  saveQuotation();
}

function saveQuotation() {
  let formData = new FormData();
  let customerId = document.querySelector('#customer_id').value;
  let validityDays = document.querySelector('#validity_days').value;

  formData.append('customer_id', customerId);
  formData.append('validity_days', validityDays);
  formData.append('concepts', JSON.stringify(conceptsManager.concepts));

  fetch(BASE_URL + 'quotations/store', {
    method: 'POST',
    body: formData
  })
  .then(response => response.json())
  .then(response => {
    if(response.success) {
      alert('La cotización se ha registrado exitosamente');
      conceptsManager.deleteAllConcepts();
      ui.printConcepts(conceptsManager);

      setTimeout(() => {
        window.location.href = BASE_URL + 'quotations';
      }, 3000);
    }
  })
}

function unitPriceCustomer() {
  if(quantityInput.value === "" || utilityInput.value === "" || unitPriceInput.value === "")
  {
    return;
  }

  resultado = (Number(unitPriceInput.value) * (Number(utilityInput.value) / 100) + Number(unitPriceInput.value)) * 1.16;
  unitPriceCustomerInput.value = resultado.toFixed(2);
}

function totalPriceCustomer() {
  if(quantityInput.value === "" || utilityInput.value === "" || unitPriceInput.value === "")
  {
    return;
  }

  resultado = (Number(unitPriceInput.value) * (Number(utilityInput.value) / 100) + Number(unitPriceInput.value)) * Number(quantityInput.value) * 1.16;
  totalPriceCustomerInput.value = resultado.toFixed(2);
}

function subtractVAT() {
  if(unitPriceInput.value === "") {
    return;
  }

  resultado = (unitPriceInput.value / 1.16);
  unitPriceInput.value = resultado.toFixed(2);
  conceptObj.unitPrice = Number(unitPriceInput.value);

  unitPriceCustomer();
  totalPriceCustomer();
}