<template>
  <div class="parallax-container">
    <div class="parallax-item right-illustration" :style="rightIllustrationStyle">
      <img src="src/assets/2.png" alt="Right Illustration">
    </div>
    <div class="parallax-item welcome" :style="welcomeStyle">
      WELCOME TO MY SITE.
      <span>— msuhroom</span>
    </div>
    <div class="parallax-item about-me" :style="aboutMeStyle">
      Hi, I'm msuhrooom. <br> <br>
      I produce digital illustrations, short mangas, and some gay original characters.
      I am currently studying Computing at Imperial College London.<br><br>
      Here are some links that allows you to stalk me or chat with me.
    </div>
    <div class="parallax-item icons" :class="{ 'fade-in': iconsVisible }">
      <a href="https://www.xiaohongshu.com/user/profile/645b10600000000029014430?xsec_token=YB9fPXkY-PJUJ47gts6VZ-zhxTbrQc4eCYxECbjXKhSQU=&xsec_source=app_share&xhsshare=CopyLink&appuid=645b10600000000029014430&apptime=1739195531&share_id=49a48e5f2d784bac8ed9a97a007d6571"
         target="_blank"
         class="icon">
        <img src="src/assets/XiaohongshuLOGO.svg" alt="Xiaohongshu Logo 1">
      </a>
      <a href="https://www.xiaohongshu.com/user/profile/5a0be74311be10263a72d2ed?xsec_token=YBbjxSd9I1qBEUTUd7hwD64y4PBycjZtYO8GMIBORLrwM=&xsec_source=app_share&xhsshare=CopyLink&appuid=5a0be74311be10263a72d2ed&apptime=1739195435&share_id=5c41ff1eaf6e4ecb99b844165542d41e"
         target="_black"
         class="icon">
        <img src="src/assets/XiaohongshuLOGO.svg" alt="Xiaohongshu Logo 2">
      </a>
      <a href="https://github.com/msuhrooom"
         id="githubLogo"
         target="_black"
         class="icon">
        <img src="src/assets/githubLOGO.svg" alt="GitHub Logo">
      </a>
      <a href="http://discord.com/users/770774543148384256"
         target="_black"
         class="icon">
        <img src="src/assets/discordLOGO.svg" alt="Discord Logo">
      </a>
    </div>
  </div>
</template>

<script setup>
import { ref, computed, onMounted } from 'vue'
import { useScroll } from '@vueuse/core'

const { y } = useScroll(window)
const iconsVisible = ref(false)

const rightIllustrationStyle = computed(() => {
  return {
    transform: `translateY(${y.value * 0.3}px)`,
  }
})

const welcomeStyle = computed(() => {
  return {
    transform: `translateY(${y.value * 0.5}px)`,
  }
})

const aboutMeStyle = computed(() => {
  return {
    transform: `translateY(${y.value * 0.7}px)`,
  }
})

onMounted(() => {
  window.addEventListener('scroll', () => {
    if (window.innerHeight + window.scrollY >= document.body.offsetHeight) {
      iconsVisible.value = true
    }
  })
})
</script>

<style scoped>
.parallax-container {
  position: relative;
  height: 200vh; /* Just to allow scrolling for demo */
}

.parallax-item {
  position: absolute;
  width: 100%;
  transition: transform 0.3s ease-out;
}

.right-illustration {
  top: 3rem;
  left: 55%;
  width: 80%;
  max-width: 400px;
}

.welcome {
  background: rgba(255, 255, 255, 0.8);
  padding: 15px 30px;
  box-shadow: 0 5px 20px rgba(0, 0, 0, 0.2);
  right: 30%;
  top: 30%;
  font-size: 1.5rem;
  font-weight: bold;
  letter-spacing: 1px;
  text-align: right;
}

.welcome span {
  font-size: 1rem;
  font-style: italic;
  display: block;
  margin-top: 5px;
  color: #555;
}

.about-me {
  background: rgba(255, 255, 255, 0.8);
  box-shadow: 0 5px 20px rgba(0, 0, 0, 0.2);
  padding: 30px 50px;
  text-align: left;
  top: 55%;
  left: 5%;
  font-size: 1rem;
  font-family: Arial, Helvetica, sans-serif;
  line-height: 1.4;
  font-style: italic;
  color: #555;
  width: 400px;
}

.icons {
  position: absolute;
  top: 80%;
  left: 55%;
  margin: 0;
  display: flex;
  justify-content: left;
  gap: 40px;
  width: 400px;
  opacity: 0; /* Initially hidden */
  transition: opacity 0.5s ease-out;
}

.icons.fade-in {
  animation: fadeInUp 1s forwards;
}

@keyframes fadeInUp {
  from {
    opacity: 0;
    transform: translateY(20px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

@media (min-width: 769px) {
  .icons {
    opacity: 1;
  }
}
</style>
