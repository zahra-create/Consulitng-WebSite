const main_video = document.querySelector('.main-video iframe');
const main_video_title = document.querySelector('.main-video h3');
const video_playlist = document.querySelector('.video-playlist .videos');

let data =  [
    {
        'id': 'a1',
        'title': 'INTRODUCTION',
        'name': "https://www.youtube.com/embed/c8_avX9miag?si=J5OZre7D6yp6_wex",
        'duration': '35:56',
    },
    {
        'id': 'a2',
        'title': 'STRATEGY AND PLANNING',
        'name': "https://www.youtube.com/embed/rVyJXnZEp2A?si=ThnK4Px3NUljLQEd" ,
        'duration': '1:07:28',
    },
    {
        'id': 'a3',
        'title': 'TALENT ACQUISITION',
        'name': "https://www.youtube.com/embed/awuJ2O2SLUs?si=wez6pkpH8LDOIoJS",
        'duration': '1:49:35',
    },

    {
        'id': 'a4',
        'title': 'CANDIDATE SELECTION 1/2',
        'name': "https://www.youtube.com/embed/to0b5yZtchc?si=fD-Q-wSyvEwgGSNf",
        'duration': '1:14:01',
    },
    {
        'id': 'a5',
        'title': 'CANDIDATE SELECTION 2/2',
        'name': "https://www.youtube.com/embed/FwJ3n6KvK1A?si=uJSIDAa7K1GH1czt",
        'duration': '1:16:12',
    },
    {
        'id': 'a6',
        'title': 'COMPENSATION AND BENEFITS',
        'name':"https://www.youtube.com/embed/iY6e_NDCJgM?si=VBRPBoOY5hK7llcW" ,
        'duration': '2:08:55',
    },
    {
        'id': 'a7',
        'title': 'LEARNING',
        'name': "https://www.youtube.com/embed/VZ-MSZXnUiw?si=aaVxRD-uWJoxe9VE",
        'duration': '1:28:29',
    },

    {
        'id': 'a8',
        'title': 'TALENTMANAGEMENT 1/2',
        'name': "https://www.youtube.com/embed/Pk8hN7lw_RA?si=imuPrN34MmJqA0a6",
        'duration': '1:03:11',
    },
    {
        'id': 'a9',
        'title': 'TALENTMANAGEMENT 2/2',
        'name': "https://www.youtube.com/embed/9zQTC8bBEhs?si=nD-wiosvK_2ZHCkh",
        'duration': '1:25:45',
    },

];

data.forEach((video,i)=>{
    let video_element = ` <div class="video" data-id="${video.id}">
                <img src="assets/imgs/icon/play-button.png" alt="">
                <p>0${i+1}. </p>
                <h3 class="titlev">${video.title}</h3>
                <p class=""time>${video.duration}</p>
            </div> 
    `;
   video_playlist.innerHTML += video_element;
})

let videos = document.querySelectorAll('.video');
videos[0].classList.add('active');
videos[0].querySelector('img').src = "assets/imgs/icon/pause-button.svg"


videos.forEach(selected_video=>{
    selected_video.onclick = () => {
        for(all_videos of videos){
            all_videos.classList.remove('active')
            all_videos.querySelector('img').src = "assets/imgs/icon/play-button.png"
        }
        selected_video.classList.add('active');
        selected_video.querySelector('img').src = "assets/imgs/icon/pause-button.svg"
        let match_video = data.find(video => video.id == selected_video.dataset.id);
        main_video.src = match_video.name;
        main_video_title.innerHTML = match_video.title;
    }
})













































