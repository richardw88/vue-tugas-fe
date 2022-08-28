<template>
  <header>
    <body>
        <div class="back">
        <router-link to="/"><img src="../assets/back.svg" width="50" height="50"/></router-link>
        </div>
        <center>
        <img src="../assets/error.svg" width="300" height="300" alt="error">
        <h3> 404 Error </h3>
        <h4> Page not found </h4>
        </center>        
    </body>
  </header>
</template>

<script>
export default {

}
</script>

<style>
body {
  position: absolute;
  background-color: #5016ff;
  width: 100%;
  height: 100%;
  margin: 0;
  padding: 0;
}

h3, h4 {
  color: white;
}

.back {
  margin: 30px;
}

/* img{
  display: absolute;

} */

</style>