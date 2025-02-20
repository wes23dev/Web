<div class="modal" id="confirma_modal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Deseja realmente deletar</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h4>A mudança será permanente</h4>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <a href="#" id="btn-excluir-modal" class='btn btn-primary'> Confirmar Exclusão </a>
      </div>
    </div>
  </div>
</div>

<script>
document.addEventListener("DOMContentLoaded", () => {
 document.querySelectorAll('.btn-excluir').forEach((button)=>{ 
    button.addEventListener("click", ()=>{
        const id = button.getAttribute("data-id")
        const link = `../controller/ControllerDeletar.php?id=${id}`
        const btn = document.querySelector("#btn-excluir-modal")
        btn.href = link     
    })
    })
})

/*
Modal
link = id=2

*/
</script>