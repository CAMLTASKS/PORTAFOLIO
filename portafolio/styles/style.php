<style type="text/css">
	


.coontaner{
  opacity: 0;
  transition: 1s;
  background-color: black;
}

#precarga{

width:100%;
  height: 100%;
  background-color: black;
  margin-top: 0;
  margin-left: 0;
  display: block;
  position: fixed;
}

    #preview-css {
        width: 100%;
        margin-top: 10px;
        margin-bottom: 20px;
        border: solid 1px #ebf7f4;
        font-size: 18px;
        text-align: center;
        background-image: url(images/fondo-pri2.gif);
          background-size: cover;
  background-repeat: no-repeat;
        height: 90vh;
        z-index: 9999999;
        padding-top: 17px;
        width: 100%;
        margin: 0 auto;
        font-family: 'Press Start 2P', cursive;
        border: solid black 2px;
    }

/* Main styles */
.text {
  fill: none;
  stroke-width: 3;
  stroke-linejoin: round;
  stroke-dasharray: 70 330;
  stroke-dashoffset: 0;
  -webkit-animation: stroke 10s infinite linear;
  animation: stroke 6s infinite linear;
  text-shadow: 3px 3px black;
  padding-top: 0px;
}
.text:nth-child(5n+1) {
  stroke: #f2385a;
  -webkit-animation-delay: -1.2s;
  animation-delay: -1.2s;
}
.text:nth-child(5n+2) {
  stroke: #f5a503;
  -webkit-animation-delay: -2.4s;
  animation-delay: -2.4s;
}
.text:nth-child(5n+3) {
  stroke: #e9f1df;
  -webkit-animation-delay: -3.6s;
  animation-delay: -3.6s;
}
.text:nth-child(5n+4) {
  stroke: #56d9cd;
  -webkit-animation-delay: -4.8s;
  animation-delay: -4.8s;
}
.text:nth-child(5n+5) {
  stroke: #3aa1bf;
  -webkit-animation-delay: -6s;
  animation-delay: -6s;
}

@-webkit-keyframes stroke {
  100% {
    stroke-dashoffset: -400;
  }
}
@keyframes stroke {
  100% {
    stroke-dashoffset: -400;
  }
}
/* Other styles */

svg {
}

.hr{

width: 100%;
height: 1em;
background-color: black;
}


.color{
  color: aqua;
  font-family: monospace;
  background-color: black;
}

.conocimientos{

  background-color: black;

}

h4{
  font-family: 'Bungee', cursive;
font-family: 'Press Start 2P', cursive;
font-family: 'Shizuru', cursive;
text-align: center;
color: aqua;
font-size: 35px;

}


.flex-container {
  flex-wrap: wrap;
  font-size: 30px;
  text-align: center;
  background-color: black;
  align-items: center;
  justify-content: center;
  justify-items: center;


}

.flex-item-left {
  background-color: #f1f1f1;
  padding: 10px;
  flex: 50%;
}

.flex-item-right {
  background-color: dodgerblue;
  padding: 10px;
  flex: 50%;
}
.raise {
  font-family: Georgia;
  color: white;
  font-size: 20px;
  padding: 10px;
  text-decoration: none;
  -webkit-border-radius: 28px;
  -moz-border-radius: 28px;
  border-radius: 28px;
  -webkit-box-shadow: 3px 2px 4px aqua;
  -moz-box-shadow: 3px 2px 4px aqua;
  box-shadow: 3px 2px 4px aqua;
  text-shadow: 3px 2px 4px aqua;
  border: dotted black 2px;
  background: -webkit-gradient(linear, 0 0, 0 100%, from(white), to(#76759c));
  background: -moz-linear-gradient(top, white, #76759c);
  margin:  1%;
}
.raise:hover {
  background: -webkit-gradient(linear, 0 0, 0 100%, from(aqua), to(black));
  background: -moz-linear-gradient(top, aqua, black)
}

.place {
  font-family: Georgia;
  color: white;
  font-size: 20px;
  padding: 10px;
  text-decoration: none;
  -webkit-border-radius: 28px;
  -moz-border-radius: 28px;
  border-radius: 28px;
  -webkit-box-shadow: 3px 2px 4px #FF7F00;
  -moz-box-shadow: 3px 2px 4px #FF7F00;
  box-shadow: 3px 2px 4px #FF7F00;
  text-shadow: 3px 2px 4px #FF7F00;
  border: dotted black 2px;
  background: -webkit-gradient(linear, 0 0, 0 100%, from(white), to(#76759c));
  background: -moz-linear-gradient(top, white, #76759c);
  margin:  %;
}
.place:hover {
  background: -webkit-gradient(linear, 0 0, 0 100%, from(#FF7F00), to(black));
  background: -moz-linear-gradient(top, #FF7F00, black)
}
h3{
  font-family: georgia;
  font-size: 30px;
  color: white;
  text-shadow: 2px 2px solid aqua;

}



</style>