<template>
  <main>
    <button @click="clicks++">{{clicks}}</button>
  </main>
</template>

<script>
export default {
  name: 'Vue',
  data(){
    return {
      clicks : 0
    }
  },
  components: {
  }
}
</script>
<style scoped>
main{
  width: 100%;
  height: 100vh;
  background-color: #333333;

  display: flex;
  justify-content: center;
  align-items: center;
}
button{
    width: 100px;
    height: 100px;
    border-radius: 10px;
    border: none;
    border-bottom: 5px solid #1467ac;
    outline: none;
    background-color: #50b0ff;
    font-size: 50px;
    font-weight: 600;
    cursor: pointer;
}
button:active{
    box-shadow: 0 0 10px black inset;
    border-bottom: none;
}
</style>