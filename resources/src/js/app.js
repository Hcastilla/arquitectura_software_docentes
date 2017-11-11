import './../sass/app.sass';
import Vue from 'vue';
import * as ajax from 'axios';

new Vue(
  {
    el:'#homeDocente',
    data:{
      clases: [],
      clase:null,
      claseActive: false
    },
    methods:{
      setClase(clase, i)
      {
        this.clase = clase;
        localStorage.setItem('clase', i);
        console.log(localStorage.getItem('clase'))
      },
      getStorageClase()
      {
        let index  =  localStorage.getItem('clase')
        if(index != null)
        {
         this.clase = this.clases[index];
        }
      },
      iniciarClase()
      {
        this.claseActive = true;
      },
      terminarClase()
      {
        this.clase = null;
        this.claseActive = false;
        localStorage.removeItem('clases');
      }
    },
    mounted(){
      const self = this;
      ajax.get('/curso/all')
      .then( data => {
        self.clases = data.data;
        self.getStorageClase();
      });
      ajax.get('/estudiante/all')
      .then( data => {
        console.log(data.data)
      });
     
    }
  }
);


