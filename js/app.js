const { createApp } = Vue

createApp({
  data() {
    return {
      message: 'PHP OOP',
      productions: [],
      movie: null,
      isOpen: false,
    }
  },
  methods: {
    fetchProductions(){
        axios.get('./db.php').then((res) => {
       console.log(res.data);
       this.productions = res.data;
      //  console.log(this.movies);
        })
    },
    openModal(movie){
      this.movie = movie;
      this.isOpen = true;
    },
    closeModal(){
      this.isOpen = false;
      this.movie = null;
    }

  },
  created(){
    this.fetchProductions();
  }
}).mount('#app')