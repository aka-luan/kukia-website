import './modules/sample.js';
import { openNav, closeNav } from './modules/nav.js';

import 'animate.css';

const kukia = {
  init() {
    console.log('init');
  },

  openNav,
  closeNav
};

window.kukia = kukia;

kukia.init()
