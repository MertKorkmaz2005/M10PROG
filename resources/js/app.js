const app = Vue.createApp({
    data() {
      return {
        dataTexts: [],
        textA: "Betrouwbaar, Precisie, Vakmanschap",
        textB: "Deskundig, Toewijding, Kwaliteit",
        textC: "Creatief, Kwaliteit, Innovatie",
        textD: "Passie, Ervaring, Duurzaamheid",
      };
    },
 
    methods: {
      randomNumber() {
          let randomIndex = Math.floor(Math.random() * 4);
  
          if (randomIndex === 0) {
            return this.textA;
          } else if (randomIndex === 1) {
            return this.textB;
          } else if (randomIndex === 2) {
            return this.textC;
          } else if (randomIndex === 3) {
            return this.textD;
          }
          else{
            return this.textA;
          }
      },
    },
  });
  
  app.mount("#app");
  