// Set up the scene
import * as THREE from 'three';
const scene = new THREE.Scene();
const camera = new THREE.PerspectiveCamera(75, window.innerWidth / window.innerHeight, 0.1, 1000);
camera.position.z = 5;

const renderer = new THREE.WebGLRenderer({ antialias: true });
renderer.setSize(window.innerWidth, window.innerHeight);
document.body.appendChild(renderer.domElement);

// Create the T-shape geometry
const shapeSize = 1;
const shapeHeight = 2;
const shapeGeometry = new THREE.Geometry();
shapeGeometry.vertices.push(
  new THREE.Vector3(-shapeSize / 2, shapeHeight / 2, 0),
  new THREE.Vector3(shapeSize / 2, shapeHeight / 2, 0),
  new THREE.Vector3(0, shapeHeight / 2, shapeSize / 2),
  new THREE.Vector3(0, shapeHeight / 2, -shapeSize / 2),
  new THREE.Vector3(-shapeSize / 2, -shapeHeight / 2, 0),
  new THREE.Vector3(shapeSize / 2, -shapeHeight / 2, 0),
  new THREE.Vector3(0, -shapeHeight / 2, shapeSize / 2),
  new THREE.Vector3(0, -shapeHeight / 2, -shapeSize / 2),
);
shapeGeometry.faces.push(
  new THREE.Face3(0, 1, 2),
  new THREE.Face3(0, 2, 3),
  new THREE.Face3(1, 0, 4),
  new THREE.Face3(4, 0, 3),
  new THREE.Face3(1, 5, 2),
  new THREE.Face3(2, 5, 6),
  new THREE.Face3(5, 4, 7),
  new THREE.Face3(7, 6, 5),
  new THREE.Face3(3, 2, 6),
  new THREE.Face3(6, 7, 3),
  new THREE.Face3(4, 5, 1),
  new THREE.Face3(7, 4, 3),
);

// Set up the material
const shapeMaterial = new THREE.MeshBasicMaterial({ color: 0x00ff00, wireframe: true });

// Create the mesh and add it to the scene
const shapeMesh = new THREE.Mesh(shapeGeometry, shapeMaterial);
scene.add(shapeMesh);

// Animate the scene
function animate() {
  requestAnimationFrame(animate);
  shapeMesh.rotation.x += 0.01;
  shapeMesh.rotation.y += 0.01;
  renderer.render(scene, camera);
}
animate();
