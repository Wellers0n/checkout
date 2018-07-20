<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Checkout</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" >


</head>
<body>
   <main class="container">
       <div class="row justify-content-center">
      <div class="col-sm-12 col-md-10 col-lg-8 text-center p-3 mt-2 formulario"><h5>Bem Vindo!</h5></div>
      
       <div class="col-sm-12 col-md-10 col-lg-8 mt-3 p-3 formulario">
           <form method="post">
               <div class="form-row">
                    <div class="form-group col-sm-12">
                        <label for="cartao">Número do cartão</label>
                        <div class="input-group align-items-center">
                            <span class="input-group-text spanImg">
                                 <img src="imgs/cartao.png" alt="Número Cartão">
                            </span>
                            <input type="tel" class="form-control inputNone" id="cartao">
                        </div>
                    </div>
               </div>
               <div class="form-row">
                   <div class="form-group col-sm-12">
                      <label for="nome">Nome do cartão</label>
                       <div class="input-group align-items-center">
                            <span class="input-group-text spanImg">
                                 <img src="imgs/contact-card.png" alt="">
                            </span>
                       <input type="text" id="nome" class="form-control inputNone">
                       </div>

                   </div>
               </div>
               <div class="form-row">
                   <div class="form-group col-sm-6">
                      <label for="expira">Expira</label>
                       <div class="input-group align-items-center">
                           <span class="input-group-text spanImg">
                              <img src="imgs/data.png" alt="Nome Cartão"> 
                           </span>
                           <select id="expira" class="form-control inputNone col-sm-3">
                               <option>Mês</option>
                               <option>1</option>
                               <option>2</option>
                               <option>3</option>
                               <option>4</option>
                               <option>5</option>
                               <option>6</option>
                               <option>7</option>
                               <option>8</option>
                               <option>9</option>
                               <option>10</option>
                               <option>11</option>
                               <option>12</option>
                           </select>
                           <select id="expira" class="form-control col-sm-5">
                               <option>Ano</option>
                               <option>2018</option>
                               <option>2019</option>
                               <option>2020</option>
                               <option>2021</option>
                               <option>2022</option>
                               <option>2023</option>
                               <option>2024</option>
                               <option>2025</option>
                           </select>
                       </div>
                   </div>
                   <div class="form-group col-sm-6">
                      <label for="codigo">Código</label>
                       <div class="input-group align-items-center">
                           <span class="input-group-text spanImg">
                               <img src="imgs/codigo.png" alt="Nome Cartão">
                           </span>
                           <input type="tel" class="form-control inputNone" id="codigo">
                       </div>
                   </div>
                   
               </div>
               <div class="form-row">
                   <div class="form-group col-sm-12">
                      <label for="email">E-Mail</label>
                       <div class="input-group align-items-center">
                            <span class="input-group-text spanImg">
                                 <img src="imgs/email.png" alt="Nome Cartão">
                            </span>
                       <input type="text" id="email" class="form-control inputNone">
                       </div>

                   </div>
               </div>
               
               <div class="form-row">
               <div class="input-group input-group-sm margin-top-10px justify-content-center mt-1">
                    <input type="submit" value="Limpar" class="btn btn-waring cancelar col-4 mr-3"/>
                     <input type="submit" value="Confirmar" class="btn btn-success col-4 "/>
                   </div>
                   
                </div>
           </form>
       </div>
             </div>

       
       <script src="js/jquery.min.js" type="text/javascript"></script>
       <script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>
   </main>
</body>
</html>