﻿<!DOCTYPE html>
<html lang="en">         
    <head>
            
<style>
* {
  box-sizing: border-box;
}

html {
  font-family: "Lucida Grande","Lucida Sans Unicode", Tahoma, sans-serif;
  font-size: 13px;
}

html, body {
  height: 100%;
  overflow: hidden;
}

body {
  background: #8D939D;
  margin: 0;
}

.all-slides {
  background: #E3E7ED;
  counter-reset: slides;
  position: absolute;
  top: 0;
  left: 0;
  width: 150px;
  padding: 3rem 1rem 1rem 2rem;
  height: 100%;
  overflow: auto;
}

.slides-title {
  position: fixed;
  background: #E3E7ED;
  z-index: 8;
  width: 150px;
  text-align: center;
  top: 0;
  left: 0;
  margin: 0;
  border-bottom: 1px solid #CDD1D8;
  color: #8585A2;
  padding: 0.5rem 0.25rem;
  font-size: 1rem;
}

.slide {
  width: 100px;
  height: 60px;
  background: linear-gradient(#444, #111);
  position: relative;
  user-select: none;
  border: 1px solid white;
  margin: 0 0 0.75rem 0;
  box-shadow: 0 0 5px rgba(black, 0.5);
  text-align: center;
  color: white;
  line-height: 60px;
  font-size: 0.5rem;
  z-index: 5;
  &:before {
    position: absolute;
    bottom: 0;
    right: 100%;
    counter-increment: slides;
    content: counter(slides);
    padding-right: 0.35rem;
    color: #999;
    line-height: normal;
    font-size: 1rem;
  }
}

.ui-sortable-helper {
  transition: none !important;
  animation: pulse 0.4s alternate infinite;
}

.sortable-placeholder {
  height: 60px;
  width: 5px;
  border-left: 2px solid #4999DA; 
  margin: 0 0 0.75rem 0;
  position: relative;
  z-index: 6;
}

@keyframes pulse {
  100% { transform: scale(1.1); } 
}

.cloned-slides {
  .slide {
    position: absolute;
    z-index: 1;
    &:before {
      content: attr(data-pos);
    }
  }
}
</style>
    </head> 
     
    <body>                 
<div class='all-slides'>

  <div class='slide'>Slide</div>
  <div class='slide'>Slide</div>
  <div class='slide'>Slide</div>             
            </div>                 
    
    
        <script  src="test1.js"></script>             
    </body>
</html>