let dark = document.getElementById('dark'),
    light = document.getElementById('light');


function dark_mode() {
    console.log('Dark Mode');
    document.documentElement.style.setProperty('--principal', '#fff');
    document.documentElement.style.setProperty('--secondary', '#fff');
    document.documentElement.style.setProperty('--additional', '#707070');
    document.documentElement.style.setProperty('--gradient', 'linear-gradient(100deg, rgb(35, 35, 35), rgb(30, 30, 30), rgb(35, 35, 35))');
    document.documentElement.style.setProperty('--muted', 'rgb(200, 200, 200)');
    document.querySelector('body').style.backgroundImage = 'linear-gradient(270deg, #303030 , #202020)';
    document.querySelector('body').style.backgroundColor = '#000';
}

function light_mode() {
    console.log('Light Mode');
    document.documentElement.style.setProperty('--principal', '#fff');
    document.documentElement.style.setProperty('--secondary', '#000');
    document.documentElement.style.setProperty('--additional', '#032d35');
    document.documentElement.style.setProperty('--gradient', 'linear-gradient(100deg, rgb(255, 255, 255), rgb(220, 220, 220))');
    document.documentElement.style.setProperty('--muted', '#707070');
    document.querySelector('body').style.background = 'url("https://images.pexels.com/photos/1323712/pexels-photo-1323712.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2")'
};

$('#dark').on('click', dark_mode);
$('#light').on('click', light_mode);