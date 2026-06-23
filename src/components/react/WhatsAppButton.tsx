interface Props {
  mensaje: string
  texto?: string
  className?: string
}

export default function WhatsAppButton({ mensaje, texto = '!Solicite tu cotización ahora…!!!', className = '' }: Props) {
  const url = `https://api.whatsapp.com/send?phone=59178119066&text=${encodeURIComponent(mensaje)}`
  return (
    <a
      href={url}
      target="_blank"
      rel="noopener noreferrer"
      class={`inline-block px-6 py-2 rounded-full text-white bg-green-600 hover:bg-green-700 no-underline ${className}`}
    >
      {texto}
    </a>
  )
}
