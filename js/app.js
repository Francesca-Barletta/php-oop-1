const { createApp } = Vue

createApp({
  data() {
    return {
      message: 'PHP OOP',
      productions: []
    }
  },
  methods: {
    fetchProductions(){
        axios.get('./db.php').then((res) => {
            // console.log(res.data);
            this.productions = res.data;
            // console.log(this.productions)
        })
    }

  },
  created(){
    this.fetchProductions();
  }
}).mount('#app')