<template>
<header>
  <body>
    <div class="container">
    <h1>IT Developer</h1>
    <router-link to="/hello" class="buttonHello">Hello World</router-link>
    <br>
    <router-link to="/history" class="buttonHistory">History</router-link>

    </div>
  </body>
</header>
</template>

<script>
</script>

<style scoped>
body{
 position: absolute;
 background: linear-gradient(244.55deg, #5016FF -66.03%, #CCBBFF 66.14%, #AEAABA 103.99%);
 width: 100%;
 height: 100%;
 margin: 0;
 padding: 0;
}
h1{
  color: #6F40FF;
  text-align: center; 
}
.buttonHello{
  width: 500px;
  height: 40px;
  /* left: 338px;
  top: 459px; */
  border-radius: 50px;
  background:#5016FF;
  cursor: pointer;
  text-align: center;
  padding-top: 10px;
  position: absolute;
  top: 50%;
  left: 50%;
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  color:white;
  text-decoration: none;
}

.buttonHistory{
  width: 500px;
  height: 40px;
  /* left: 338px;
  top: 459px; */
  border-radius: 50px;
  background:#5016FF;
  cursor: pointer;
  text-align: center;
  padding-top: 10px;
  position: absolute;
  top: 60%;
  left: 50%;
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  color:white;
  text-decoration: none;
}

.container{
  margin-top: 200px;
}
</style>