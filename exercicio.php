<!DOCTYPE html>

<head>
    <title>Conferência Online de Orbat</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width-device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <link rel="icon" type="image/png" href="simbolo.png">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

  
 <style>

ul {
          list-style-type: none;
          margin: 0;
          padding: 0;
          overflow: hidden;
          background-color: #548B54;
          width: auto;
          height: 20px;
        }

     
        
        li {
          float: left;
        }
        
        li a {
          display: block;
          color: white;
          text-align: center;
          padding: 14px 16px;
          text-decoration: none;
        }
        
        li a:hover {
          background-color: #111;   
        }

        div#page {
    width: 50px;
    padding: 40px 20px;
    position: absolute;
    top: -25px;
    left: 875px;
            
}


div#btnmenu {
    width: 50px;
    padding: 40px 20px;
    position: absolute;
    top: -17px;
    left: -2px;
            
}


img {
    max-width: 140px;    
} 

div#navbar {
    width: 1920px;
    position: absolute;
    top: 0px;
            
}

     div#text{
  position: absolute;
  top: 250px;
  left: 1000px;
  width: 800px;
  font-size: 50px;

transform: translate(-50%, -50%);
}

div#btnadm {
    width: 200px;
    padding: 40px 20px;
    position: absolute;
    top: -32px;
    left: 1820px;
            
}

div#text2{
  position: absolute;
  top: 320px;
  left: 1000px;
  width: 800px;
  text-align: center;
  

transform: translate(-50%, -50%);
}

div#bverm{
  position: absolute;
  top: 400px;
  left: 1050px;
  text-align: center;
  

transform: translate(-50%, -50%);
}

div#bazul{
  position: absolute;
  top: 400px;
  left: 910px;
  text-align: center;
  

transform: translate(-50%, -50%);
}

div#table{
  position: absolute;
  top: 650px;
  left: 960px;
  width: 1980px;
  text-align: center;
  

transform: translate(-50%, -50%);
}

div#cmtadest{
  position: absolute;
  top: 520px;
  left: 492px;
  width: 10;
  text-align: center;
  

transform: translate(-50%, -50%);
}

div#forop{
  position: absolute;
  top: 520px;
  left: 768px;
  width: 10;
  text-align: center;
  

transform: translate(-50%, -50%);
}

div#direx{
  position: absolute;
  top: 520px;
  left: 1210px;
  width: 10;
  text-align: center;
  

transform: translate(-50%, -50%);
}
.vertical-menu {
      width: 300px;
      background-color: #f5f5f5;
      position: fixed;
      left: 0; /* Posição inicial para que o menu esteja escondido */
      top: 0;
      height: 95%;
      overflow-x: hidden;
      transition: 0.5s;
      padding-top: 60px;
    }

    .vertical-menu a {
      padding: 10px;
      text-decoration: none;
      color: #000;
      display: block;
      transition: 0.3s;
    }

    .vertical-menu a:hover {
      background-color: #ddd;
    }

    /* Esconde o input do checkbox */
    #menu-toggle {
      display: none;
    }

    /* Quando o input do checkbox está checado, mostra o menu */
    #menu-toggle:checked + .vertical-menu {
      left: -300px;
    }

    /* Ajusta a posição do botão "Abrir Menu" */
    #openMenu {
      position: absolute;
      top: 20px;
      left: 20px;
      z-index: 999; /* Para garantir que o botão esteja acima do menu */
    }


   </style>        
</head> 
<body>  

  <div id="navbar">
    <ul style="height: 70px">
        <div id="page"><img src="simbolo.png" /></div>
        <div id="btnmenu">
          <label style="background-color: #548B54; top: 35px" for="menu-toggle" id="openMenu"> <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-arrow-left-right" viewBox="0 0 16 16">
            <path style="color: white" fill-rule="evenodd" d="M1 11.5a.5.5 0 0 0 .5.5h11.793l-3.147 3.146a.5.5 0 0 0 .708.708l4-4a.5.5 0 0 0 0-.708l-4-4a.5.5 0 0 0-.708.708L13.293 11H1.5a.5.5 0 0 0-.5.5m14-7a.5.5 0 0 1-.5.5H2.707l3.147 3.146a.5.5 0 1 1-.708.708l-4-4a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 4H14.5a.5.5 0 0 1 .5.5"/>
          </svg></label></div>
        <div id="btnadm">
            <button style="width: 50%;" type="button" class="btn" data-toggle="modal" data-target="#myModal"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
              <path style="color: white" d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
              <path style="color: white" fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
            </svg></button>
            <div class="container"> 
                <!-- The Modal -->
                <div class="modal" id="myModal">
                  <div class="modal-dialog">
                    <div class="modal-content">
                    
                      <!-- Modal Header -->
                      <div class="modal-header">
                        <h4 class="modal-title">LOGIN ADMIN</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                      </div>
                      
                      <!-- Modal body -->
                      <div class="modal-body">
                        <form action="/action_page.php">
                            <label for="email">Usuário</label>
                             <input type="email" class="form-control" id="email" placeholder="Digite o usuário" name="email">
                             <br>
                             <label for="pwd">Senha:</label>
                              <input type="password" class="form-control" placeholder="Digite a senha" id="pwd">
                              <div class="modal-footer">
                                <button type="button" class="btn btn-success" data-dismiss="modal">Logar</button>
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                              </div>
                        </form>
                      </div>
                      
                      <!-- Modal footer -->
                      
                      
                    </div>
                  </div>
                </div>
                
              </div>
            

            <!--<svg style="color: white" xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-gear" viewBox="0 0 16 16">
            <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492M5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0"/>
            <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115z"/>
        </svg>--></div>
    </ul>  
  </div> 
  
  
    
<!-- Checkbox para controlar o estado do menu -->
<input type="checkbox" id="menu-toggle">

<!-- Menu Vertical -->
<div style="position: absolute; top: 70px" class="vertical-menu">
  <h5><a href="usuarios.html">Usuários</a></h5>
  <h5><a href="exercicios.html">Exercício</a></h5>
  <h5><a href="om.html">OM</a></h5>
  <h5><a href="conferencia.html">Montar conferência</a></h5>
  <h5><a href="visualizar.html">Visualizar Exercícios</a></h5>
  <h5><a href="home.html">Sair</a></h5>
</div>  

<div id="text"><b>CONFERÊNCIA ONLINE DE ORBAT</b></div>

   <div id="text2" class="alert alert-warning">
    <strong>Atenção!</strong> Clique <a href="#">aqui</a> para obter as orientações de Orbat.
  </div> 

  <div id="bverm">
    <button type="button" class="btn btn-danger">Lado Vermelho</button>
    </div>

  <div id="bazul">
    <button type="button" class="btn btn-primary">Lado Azul</button>
    </div>

    <div id="cmtadest">
        <button style="width: 185%;" type="button" class="btn btn-primary">Comando Executante</button>
        </div>

    <div id="forop">
        <button style="width: 655%;" type="button" class="btn btn-danger">Forop</button>
        </div>

    <div id="direx">
        <button style="width: 536%;" type="button" class="btn btn-success">Direx</button>
        </div>

    <div id="table" class="container">            
        <table class="table table-bordered">
          <thead>
            <tr>
            <b><th>OM</th>
              <th>STATUS</th>
              <th>OPÇÕES</th></b>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1° RCC</td>
              <td>Não enviado</td>
              <td>Inserir</td>
            </tr>
            <tr>
              <td>27° GAC</td>
              <td>Não enviado</td>
              <td>Inserir</td>
            </tr>
            <tr>
              <td>29° BIB</td>
              <td>Não enviado</td>
              <td>Inserir</td>
            </tr>
          </tbody>
        </table>

       
</body>

</html>