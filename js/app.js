const { createApp } = Vue

createApp({
  data() {
    return {
      message: 'PHP OOP',
      productions: [],
      movies: []
    }
  },
  methods: {
    fetchProductions(){
        axios.get('./db.php').then((res) => {
         
          this.movies = res.data;
          console.log(res.data);
        })
    }

  },
  created(){
    this.fetchProductions();
   
  }
}).mount('#app')