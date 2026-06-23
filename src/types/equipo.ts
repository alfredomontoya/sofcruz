export interface MiembroEquipo {
  id: string
  nombre: string
  rol: string
  foto: string
  descripcion: string
  redes?: {
    facebook?: string
    instagram?: string
    linkedin?: string
    whatsapp?: string
  }
  oculto?: boolean
}

export interface GrupoEquipo {
  titulo: string
  miembros: MiembroEquipo[]
}
