export interface Subservicio {
  titulo: string
  descripcion: string
  whatsappMensaje: string
}

export interface ServicioPrincipal {
  id: string
  titulo: string
  descripcion: string
  imagen: string
  color: string
}

export interface GrupoServicios {
  id: string
  titulo: string
  descripcion: string
  emoji: string
  color: string
  imagen: string
  subservicios: Subservicio[]
}
