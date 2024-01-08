import { Controller } from '@hotwired/stimulus';
import axios from 'axios';

export default class extends Controller {

    play(event) {
        event.preventDefault();


        console.log('play')
    }
}
