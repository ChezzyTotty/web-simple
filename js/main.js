// edit contain 1

const about = document.querySelector('#about')
const contact = document.querySelector('#contact')
const project = document.querySelector('#project')
const small = document.querySelector('#small')
const fotograf = document.querySelector('#fotograf')
const pardus = document.querySelector('#pardus')
const veritabanı = document.querySelector('#veritabanı')
// edit contain 2
const aboutContent = document.querySelector('#about-content')
const contactContent = document.querySelector('#contact-content')
const projectContent = document.querySelector('#project-content')
const smallContent = document.querySelector('#small-content')
const fotografContent = document.querySelector('#fotograf-content')
const smspanelContent = document.querySelector('#smspanel-content')
const makinelerContent = document.querySelector('#makineler-content')
const sistemimContent = document.querySelector('#sistemim-content')
const botlarContent = document.querySelector('#botlar-content')
const eğitimContent = document.querySelector('#eğitim-content')
const pardusContent = document.querySelector('#pardus-content')
const veritabanıContent = document.querySelector('#veritabanı-content')

eğitim.addEventListener('click', () => {
  const eğitimBox = new WinBox({
    title: 'Eğitim',
    // modal: true,
    width: '400px',
    height: '400px',
    top: 50,
    right: 50,
    bottom: 50,
    left: 50,
    mount: eğitimContent,
    onfocus: function () {
      this.setBackground('#00aa00')
    },
    onblur: function () {
      this.setBackground('#777')
    },
  })
})


veritabanı.addEventListener('click', () => {
  const veritabanıBox = new WinBox({
    title: 'Veritabanı Projeleri',
    // modal: true,
    width: '400px',
    height: '400px',
    top: 50,
    right: 50,
    bottom: 50,
    left: 50,
    mount: veritabanıContent,
    onfocus: function () {
      this.setBackground('#00aa00')
    },
    onblur: function () {
      this.setBackground('#777')
    },
  })
})


pardus.addEventListener('click', () => {
  const pardusBox = new WinBox({
    title: 'Pardus',
    // modal: true,
    width: '400px',
    height: '400px',
    top: 50,
    right: 50,
    bottom: 50,
    left: 50,
    mount: pardusContent,
    onfocus: function () {
      this.setBackground('#00aa00')
    },
    onblur: function () {
      this.setBackground('#777')
    },
  })
})

sistemim.addEventListener('click', () => {
  const sistemimBox = new WinBox({
    title: 'Sistemim',
    // modal: true,
    width: '400px',
    height: '400px',
    top: 50,
    right: 50,
    bottom: 50,
    left: 50,
    mount: sistemimContent,
    onfocus: function () {
      this.setBackground('#00aa00')
    },
    onblur: function () {
      this.setBackground('#777')
    },
  })
})


botlar.addEventListener('click', () => {
  const botlarBox = new WinBox({
    title: 'Discord Bot Projelerim',
    // modal: true,
    width: '400px',
    height: '400px',
    top: 50,
    right: 50,
    bottom: 50,
    left: 50,
    mount: botlarContent,
    onfocus: function () {
      this.setBackground('#00aa00')
    },
    onblur: function () {
      this.setBackground('#777')
    },
  })
})




about.addEventListener('click', () => {
  const aboutBox = new WinBox({
    title: 'Hakkımda',
    // modal: true,
    width: '400px',
    height: '400px',
    top: 50,
    right: 50,
    bottom: 50,
    left: 50,
    mount: aboutContent,
    onfocus: function () {
      this.setBackground('#00aa00')
    },
    onblur: function () {
      this.setBackground('#777')
    },
  })
})

fotograf.addEventListener('click', () => {
  const fotografBox = new WinBox({
    title: 'Fotograf',

    width: '355px',
    height: '686px',
    top: 50,
    right: 50,
    bottom: 50,
    left: 50,
    mount: fotografContent,
    onfocus: function () {
      this.setBackground('#00aa00')
    },
    onblur: function () {
      this.setBackground('#777')
    },
  })
})

makineler.addEventListener('click', () => {
  const makinelerBox = new WinBox({
    title: 'Sanal Makine',
    width: '400px',
    height: '400px',
    top: 50,
    right: 50,
    bottom: 50,
    left: 50,
    mount: makinelerContent,
    onfocus: function () {
      this.setBackground('#00aa00')
    },
    onblur: function () {
      this.setBackground('#777')
    },
  })
})

smspanel.addEventListener('click', () => {
  const smspanelBox = new WinBox({
    title: 'Sms Panel',
    width: '400px',
    height: '400px',
    top: 50,
    right: 50,
    bottom: 50,
    left: 50,
    mount: smspanelContent,
    onfocus: function () {
      this.setBackground('#00aa00')
    },
    onblur: function () {
      this.setBackground('#777')
    },
  })
})

contact.addEventListener('click', () => {
  const contactBox = new WinBox({
   title :'İletişim',
   
    width: '480px',
    height: '400px',
    top: 50,
    right: 50,
    bottom: 50,
    left: 60,
    mount: contactContent,
    resizable: false, // Kutunun boyutunu sabit tutar
    onfocus: function () {
      this.setBackground('#00aa00')
    },
    onblur: function () {
      this.setBackground('#777')
    },
  })
})

// edit contain 3
project.addEventListener('click', () => {
  const ProjectBox = new WinBox({
   title:'Projeler',
    width: '400px',
    height: '400px',
    top: 150,
    right: 50,
    bottom: 50,
    left: 50,
    mount: projectContent,
    onfocus: function () {
      this.setBackground('#00aa00')
    },
    onblur: function () {
      this.setBackground('#777')
    },
  })
})

small.addEventListener('click', () => {
  const SmallBox = new WinBox({
    
    width: '400px',
    height: '400px',
    top: 80,
    right: 50,
    bottom: 50,
    left: 50,
    mount: smallContent,
    onfocus: function () {
      this.setBackground('#00aa00')
    },
    onblur: function () {
      this.setBackground('#777')
    },
  })
})


