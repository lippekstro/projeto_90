<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/olhonailha/templates/_cabecalho.php';
?>

    <section style="margin: 1rem;">
        <legend style="text-align: center;"><h2>Editar perfil</h2></legend>
        <form class="mx-auto p-5" style = "width: 1000px">
            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" name="nome" id="nome" aria-describedby="emailHelp">
    
              </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp">
              
            </div>
            <div class="mb-3">
              <label for="senha" class="form-label">Senha</label>
              <input type="password" class="form-control" name="senha" id="senha">
            </div>
            <div class="mb-3">
                <label for="celular" class="form-label">Celular</label>
                <input type="tel" class="form-control" nome="celular" id="celular" aria-describedby="emailHelp">
              
    
              </div>
            <div class="mb-3">
                <label for="endereco" class="form-label">Endereço</label>
                <input type="text" class="form-control" name="endereco" id="endereco" aria-describedby="emailHelp">
    
              </div>
            
            <button type="submit" class="btn btn-primary">Editar</button>
          </form>

    </section>
    <footer style="text-align: center; padding: 1rem; margin-top: 140px; background-color: rgba(0, 195, 255, 0.89);">Todos os direitos reservados &copy;</footer>
    
</body>
</html>