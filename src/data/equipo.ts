import type { GrupoEquipo } from '../types/equipo'

export const gruposEquipo: GrupoEquipo[] = [
  {
    titulo: 'DIRECTORES',
    miembros: [
      {
        id: 'alfredo',
        nombre: 'Ing. Alfredo Montoya',
        rol: 'DESARROLLADOR BACK-END',
        foto: 'img/alfredo.jpg',
        descripcion: 'Trabaja en el campo de la Ingenieria de Software, Experto en el desarrollo de sistemas empresariales en el leguaje JAVA.',
        redes: {
          facebook: 'https://www.facebook.com/alfredo.montoya.5055',
          whatsapp: 'https://api.whatsapp.com/send?phone=59176032555&text=Hola Alfredo, quisiera información sobre SofCruz por favor',
        },
      },
      {
        id: 'cristian',
        nombre: 'Ing. Cristian Pizarroso',
        rol: 'DESARROLLADOR APP MOVIL',
        foto: 'img/cristian.jpg',
        descripcion: 'Trabaja en el campo de la Ingenieria de Software, Experto en el diseño y desarrollo de aplicaciones moviles Android y IOS',
        redes: {
          facebook: 'https://www.facebook.com/cpizarrosoperedo',
          whatsapp: 'https://api.whatsapp.com/send?phone=59178119066&text=Hola Cristian, quisiera información sobre SofCruz por favor',
        },
      },
    ],
  },
]
