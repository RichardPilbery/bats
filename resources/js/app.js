require('./bootstrap');

window.Vue = require('vue');
import VueShowdown from 'vue-showdown'

// the second parameter of Vue.use() is optional
Vue.use(VueShowdown, {
  // set default flavor of showdown
  flavor: 'github',
  // set default options of showdown (will override the flavor options)
  options: {
    emoji: true
  },
}) 

var exclusion = "This is markdown and is being used because it'll be mean that your text render on the mobile app as you intend :sunglasses: (Yes, you can use emojis too :smiley: full list here: [Emojis](https://gist.github.com/RichardPilbery/baa96908897ff9ace033f67ac86555b3))\n# Big Header\n## Smaller header\n\nThis is a list:\n+ First item\n+ Second item\n+ Third Item\n\nThis is a regular paragraph with **bold** and *italic* words.\n\n";
var inclusion = exclusion;
var version = "No version number";

if(typeof document.getElementById("exclusion") === 'undefined' || document.getElementById("exclusion") === null ) {
    // We are not on a form page
    console.log("Rhubarb");
    exclusion = "";
    inclusion = "";
    version = "";
} else {
   if(document.getElementById("exclusion").value == "") {
    console.log("one");
     exclusion = "";
   }
   else {
    console.log("two");
     exclusion = document.getElementById("exclusion").value;
     inclusion = document.getElementById("inclusion").value;
     version = document.getElementById("version").value;
   }
}

const app = new Vue({
    el: '#app',
    data: {
        exclusion: exclusion,
        inclusion: inclusion,
        version: version
    }
});