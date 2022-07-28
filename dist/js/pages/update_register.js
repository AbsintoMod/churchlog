//cadastro de Filhos
function updateFilho() {
  let addFilho = $("#num_filho").val();
  let totalFilho = document.querySelector("#totalFilho");
  let filhoAdd = parseInt(addFilho - totalFilho.value);
  
  if (addFilho == "" || addFilho == 0) {
    $("#modal-error").modal("show");
  } else if (addFilho >= 1 && addFilho <= 6) {
    $("#nfilhos_vazio").css("display", "none");
    $("#nfilhos").css("display", "block");

    if (totalFilho.value == "") {
      totalFilho.value = addFilho;
    } else {
      if (totalFilho.value >= 6) {
        $("#modal-danger").modal("show");
        return;
      } else {
        totalFilho.value = addFilho;
      }
    }
    $("#dependentes").css("display", "block");
    console.log(filhoAdd);
    
    for (let i = 1; i <= filhoAdd; i++) {
      var div = document.querySelector("#addDependente");
      var element = document.createElement("div");
      element.classList = "row align-items-end";
      element.innerHTML = `
        <div class="form-group col-12">
            <label for="nome_filho${i}" class="col-12 control-label">${i}º:</label>
            <div class="col-12">
            <input type="text" class="form-control" id="nome_filho${i}" placeholder="..." name="nome_filho${i}" value="">
            </div>
        </div>
      `;
      div.appendChild(element);
    }
  } else if (addFilho >= 7) {
    $("#modal-danger").modal("show");
  }
};