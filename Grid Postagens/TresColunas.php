<!-- CSS DE ESPAÇAMENTO -->
<style>

   .container{
   max-width: 1660px; }


   .container {
   position: relative;
   width: 100%;
   margin: 0 auto;
   padding: 0 20px;
   box-sizing: border-box; }
   .column,
   .columns {
   width: 100%;
   float: left;
   box-sizing: border-box; }
   /* For devices larger than 400px */
   @media (min-width: 400px) {
   .container {
   width: 85%;
   padding: 0; }
   }
   /* For devices larger than 550px */
   @media (min-width: 550px) {
   .container {
   width: 80%; }
   .column,
   .columns {
   margin-left: 4%; }
   .column:first-child,
   .columns:first-child {
   margin-left: 0; }
   .one-third.column               { width: 30.6666666667%; }
   .two-thirds.column              { width: 65.3333333333%; }
   .one-half.column                { width: 48%; }
   }
</style>


<!-- DUAS COLUNAS -->
<div class="container">
   <?php  // COMEÇO DO LOOP AQUI ?>
   <!-- COMPONENTE DO LOOP -->
   <div id="itemDuasColunas" style="background-image: url(' <?php the_post_thumbnail_url(); ?> ')" class="one-third column">
      <a href=" <?php the_permalink(); ?> ">
         <p> <?php the_title(); ?> </p>
      </a>
   </div>
   <?php  // FIM DO LOOP AQUI ?>
</div>

<!-- CSS INTERNO -->
<style>
   #itemDuasColunas{
   background-color: black;
   background-size: cover;
   background-position: center;
   padding: 25px;
   opacity: .7; }
   #itemDuasColunas:hover{
   background-color: black;
   background-size: cover;
   background-position: center;
   padding: 30px;
   opacity: .8; }
   #itemDuasColunas:active{
   background-color: black;
   background-size: cover;
   background-position: center;
   padding: 30px;
   opacity: .6; }
   #itemDuasColunas a p{
   -webkit-box-decoration-break: clone;
   padding: 0 16px;
   display: inline;
   line-height: 94px;
   background-color: #7221ff;
   white-space: pre;
   }

   /* QUESTÃO DE ALTURA */
   #itemDuasColunas{
   height: 450px; }
</style>

