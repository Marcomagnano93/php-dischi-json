const { createApp } = Vue

createApp({
  data() {
    return {
      discs: [],
      modalOpen: false,
      modalDisc: null
    }
  },
  methods: {
    // recuperare i dati dal server con chiamata get (axios)
    fetchData(){
        axios.get('./server.php').then((res) => {
            this.discs = res.data.results
        })
    },
    openModal(disc){
        this.modalDisc = disc;

        if(this.modalOpen === false){
            this.modalOpen = true;
        }
        else {
            this.modalOpen = false;
        }
    }
  },
  created() {
    this.fetchData()
},
}).mount('#app')
