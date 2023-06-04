import './bootstrap';
import 'flowbite';
import jquery from 'jquery';


// dark mod btn
var themeToggleDarkIcon = document.getElementById('theme-toggle-dark-icon');
var themeToggleLightIcon = document.getElementById('theme-toggle-light-icon');

// Change the icons inside the button based on previous settings
if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
    themeToggleLightIcon.classList.remove('hidden');
} else {
    themeToggleDarkIcon.classList.remove('hidden');
}

var themeToggleBtn = document.getElementById('theme-toggle');

themeToggleBtn.addEventListener('click', function() {

    // toggle icons inside button
    themeToggleDarkIcon.classList.toggle('hidden');
    themeToggleLightIcon.classList.toggle('hidden');

    // if set via local storage previously
    if (localStorage.getItem('color-theme')) {
        if (localStorage.getItem('color-theme') === 'light') {
            document.documentElement.classList.add('dark');
            localStorage.setItem('color-theme', 'dark');
        } else {
            document.documentElement.classList.remove('dark');
            localStorage.setItem('color-theme', 'light');
        }

    // if NOT set via local storage previously
    } else {
        if (document.documentElement.classList.contains('dark')) {
            document.documentElement.classList.remove('dark');
            localStorage.setItem('color-theme', 'light');
        } else {
            document.documentElement.classList.add('dark');
            localStorage.setItem('color-theme', 'dark');
        }
    }
    
});

// meeting 

let meetingJoined = false;
const meeting = new Metered.Meeting();

async function initializeView() {
    //peupler le camera

    const videoInputDevices =  await meeting.listVideoInputDevices();
    const videoOptions = [];

    for (let item of videoInputDevices ) {
        videoOptions.push(
            `<option value="${item.deviceId}">${item.label}</option>`
        )
    }
    jquery('#cameraSelectBox').html(videoOptions.join(""));
    //peupler micro

    const audioInputDevices = await meeting.listAudioinputDevices();
    const audioOptions = [];

    for (let item of audioInputDevices){
        audioOptions.push(
            `<option value="${item.deviceId}">${item.label}</option>`
        )
    }

    jquery('#microphoneSelectBox').html(audioOptions.join(""));
}

initializeView();

/**
 * Mute unLute camera and microphone
 */

let micOn = false;
jquery('#waitingAreaToggleMicrophone').on('click', async function(){
    if (micOn) {
        micOn = false;
        jquery('#waitingAreaToggleMicrophone').removeClass('bg-gray-500');
        jquery('#waitingAreaToggleMicrophone').addClass('bg-gray-400');
    } else {
        micOn = true;
        jquery('#waitingAreaToggleMicrophone').removeClass('bg-gray-400');
        jquery('#waitingAreaToggleMicrophone').addClass('bg-gray-500');
    }
});

let cameraOn = false;
jquery('#waitingAreaToggleCamera').on('click', async function(){
    if (cameraOn) {
        cameraOn = false;
        jquery('#waitingAreaToggleCamera').removeClass('bg-gray-500');
        jquery('#waitingAreaToggleCamera').addClass('bg-gray-400');
        const tracks = localVideoStream.getTracks();
        tracks.array.forEach(function (track) {
            track.stop();
        });
        localVideoStream = null;

        jquery("#waitingAreaLocalVideo")[0].srcObject = null;
    } else {
        cameraOn = true;
        jquery('#waitingAreaToggleCamera').removeClass('bg-gray-400');
        jquery('#waitingAreaToggleCamera').addClass('bg-gray-500');
        localVideoStream = await meeting.getLocalVideoStream();
        jquery("#waitingAreaLocalVideo")[0].srcObject = localVideoStream;
        cameraOn = true;
    }
});

/**
 * Ajouter un gestionnaire d'événement
 * /








import {
  Modal,
  Ripple,
  initTE,
} from "tw-elements";

initTE({ Modal, Ripple });