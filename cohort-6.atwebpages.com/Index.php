<!Doctype html>
 <html lang="en">
  <!--This webpage is licensed under Cohort-6 copyright and created with fellow alx Cohort_6 Members read the Doc.html for more -->
  <head>
  <meta charset='UTF-8'/>
  <link rel='stylesheet' href=' http://cohort-6.atwebpages.com/style.css'>
  <script src="https://threejs.org/build/three.js"></script>
  
  <title>Cohort_6-lab</title>
 
 </head>
  
  <html>
  <body>
  
  <h1>Cohort_6 :  Hello World</h1>
  
  <p>
  
  </p>
  
 <div>
 
  
  <script>
  const scene = new THREE.Scene();
			const camera = new THREE.PerspectiveCamera( 75, window.innerWidth / window.innerHeight, 0.1, 1000 );

			const renderer = new THREE.WebGLRenderer();
			renderer.setSize( window.innerWidth, window.innerHeight );
			document.body.appendChild( renderer.domElement );

			const geometry = new THREE.BoxGeometry();
			const material = new THREE.MeshBasicMaterial( { color: 0x00ff00 } );
			const cube = new THREE.Mesh( geometry, material );
			scene.add( cube );

			camera.position.z = 5;

			function animate() {
				requestAnimationFrame( animate );

				cube.rotation.x += 0.01;
				cube.rotation.y += 0.01;

				renderer.render( scene, camera );
			};
                        
                        animate();
                        
                        </script>
 
 </div>  
 
 
 
 
 <footer> 
  
  </footer>
  
  
  
  </body>
  </html>
  
  
