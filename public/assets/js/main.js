import * as THREE from '../vendor/three/three.module.min.js';

const navToggle = document.querySelector('.nav-toggle');
const siteNav = document.querySelector('#site-nav');

if (navToggle && siteNav) {
    navToggle.addEventListener('click', () => {
        const isOpen = siteNav.classList.toggle('is-open');
        navToggle.setAttribute('aria-expanded', String(isOpen));
    });
}

function addBox(scene, size, position, color, metalness = 0.35, roughness = 0.42) {
    const geometry = new THREE.BoxGeometry(size.x, size.y, size.z);
    const material = new THREE.MeshStandardMaterial({
        color,
        metalness,
        roughness,
    });
    const mesh = new THREE.Mesh(geometry, material);
    mesh.position.copy(position);
    scene.add(mesh);
    return mesh;
}

function addCylinderBetween(scene, start, end, radius, color) {
    const direction = new THREE.Vector3().subVectors(end, start);
    const length = direction.length();
    const geometry = new THREE.CylinderGeometry(radius, radius, length, 16);
    const material = new THREE.MeshStandardMaterial({
        color,
        metalness: 0.18,
        roughness: 0.35,
        emissive: color,
        emissiveIntensity: 0.12,
    });
    const mesh = new THREE.Mesh(geometry, material);
    mesh.position.copy(start).add(end).multiplyScalar(0.5);
    mesh.quaternion.setFromUnitVectors(new THREE.Vector3(0, 1, 0), direction.normalize());
    scene.add(mesh);
    return mesh;
}

function createStructure(scene) {
    const group = new THREE.Group();
    scene.add(group);

    const steel = 0xdbe2f6;
    const concrete = 0x96ccff;
    const rebar = 0x4edea1;
    const slab = 0x25344a;

    const localScene = { add: (obj) => group.add(obj) };
    // EngCalc convention: X/Y are plan axes and negative Z is visually upward.
    const levels = [0, -1.1, -2.2];
    const xs = [-1.35, 0, 1.35];
    const ys = [-0.8, 0.8];

    for (const x of xs) {
        for (const y of ys) {
            addBox(localScene, new THREE.Vector3(0.12, 0.12, 2.55), new THREE.Vector3(x, y, -1.1), steel);
        }
    }

    for (const z of levels) {
        for (const y of ys) {
            addBox(localScene, new THREE.Vector3(3.0, 0.11, 0.11), new THREE.Vector3(0, y, z), concrete);
        }
        for (const x of xs) {
            addBox(localScene, new THREE.Vector3(0.11, 1.75, 0.11), new THREE.Vector3(x, 0, z), concrete);
        }
        addBox(localScene, new THREE.Vector3(2.9, 1.55, 0.04), new THREE.Vector3(0, 0, z + 0.08), slab, 0.1, 0.8);
    }

    for (const y of [-0.62, -0.2, 0.2, 0.62]) {
        addCylinderBetween(localScene, new THREE.Vector3(-1.18, y, -0.16), new THREE.Vector3(1.18, y, -0.16), 0.025, rebar);
        addCylinderBetween(localScene, new THREE.Vector3(-1.18, y, -1.26), new THREE.Vector3(1.18, y, -1.26), 0.025, rebar);
    }

    const grid = new THREE.GridHelper(4.2, 12, 0x38a6f5, 0x243248);
    grid.rotation.x = Math.PI / 2;
    grid.position.z = 0.18;
    grid.material.opacity = 0.42;
    grid.material.transparent = true;
    group.add(grid);

    group.rotation.z = -0.42;
    return group;
}

function initSolverWebgl() {
    const canvas = document.querySelector('#solver-webgl');
    const viewport = canvas?.closest('.solver-viewport');

    if (!canvas || !viewport) {
        return;
    }

    const renderer = new THREE.WebGLRenderer({
        canvas,
        alpha: true,
        antialias: true,
        preserveDrawingBuffer: true,
        powerPreference: 'high-performance',
    });
    renderer.setPixelRatio(Math.min(window.devicePixelRatio || 1, 2));
    renderer.outputColorSpace = THREE.SRGBColorSpace;

    const scene = new THREE.Scene();
    scene.fog = new THREE.Fog(0x060e1c, 5.8, 11);

    const camera = new THREE.PerspectiveCamera(38, 1, 0.1, 100);
    camera.position.set(3.8, -4.6, -0.55);
    camera.up.set(0, 0, -1);
    camera.lookAt(0, 0, -1.0);

    scene.add(new THREE.AmbientLight(0x9fcfff, 0.75));

    const key = new THREE.DirectionalLight(0xffffff, 1.4);
    key.position.set(3, 4, -5);
    scene.add(key);

    const blue = new THREE.PointLight(0x38a6f5, 2.2, 8);
    blue.position.set(-2.8, 1.8, -2.8);
    scene.add(blue);

    const green = new THREE.PointLight(0x4edea1, 1.2, 6);
    green.position.set(2.4, -1.4, -1.2);
    scene.add(green);

    const structure = createStructure(scene);

    function resize() {
        const rect = viewport.getBoundingClientRect();
        const width = Math.max(1, Math.floor(rect.width));
        const height = Math.max(1, Math.floor(rect.height));
        renderer.setSize(width, height, false);
        camera.aspect = width / height;
        camera.updateProjectionMatrix();
    }

    const resizeObserver = new ResizeObserver(resize);
    resizeObserver.observe(viewport);
    resize();

    let last = performance.now();
    let ready = false;

    function animate(now) {
        const delta = Math.min(0.04, (now - last) / 1000);
        last = now;
        structure.rotation.z += delta * 0.22;
        renderer.render(scene, camera);

        if (!ready) {
            ready = true;
            viewport.classList.add('is-webgl-ready');
        }

        requestAnimationFrame(animate);
    }

    requestAnimationFrame(animate);
}

initSolverWebgl();
