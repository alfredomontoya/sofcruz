import { useRef, useState } from 'react'
import type { GrupoServicios } from '../../types/servicios'
import WhatsAppButton from './WhatsAppButton'

interface Props {
  items: GrupoServicios[]
}

export default function ExpandableCards({ items }: Props) {
  const [activeId, setActiveId] = useState<string | null>(null)
  const hideTimer = useRef<ReturnType<typeof setTimeout>>(null)

  const show = (id: string) => {
    if (hideTimer.current) clearTimeout(hideTimer.current)
    setActiveId(id)
  }

  const scheduleHide = () => {
    hideTimer.current = setTimeout(() => setActiveId(null), 200)
  }

  return (
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 px-4 py-5 max-w-7xl mx-auto">
      {items.map((item) => {
        const isOpen = activeId === item.id
        return (
          <div
            key={item.id}
            data-search-target
            class={`relative ${isOpen ? 'rounded-2xl shadow-lg' : ''}`}
            style={{ zIndex: isOpen ? 10 : 1 }}
            onMouseEnter={() => show(item.id)}
            onMouseLeave={scheduleHide}
          >
            <div class={`overflow-hidden bg-white ${isOpen ? 'rounded-t-2xl' : 'rounded-2xl shadow-md hover:shadow-lg transition-shadow duration-300'}`}>
              <div class={`bg-gradient-to-br ${item.color} p-5 text-white`}>
                <div class="text-3xl mb-2">{item.emoji}</div>
                <h3 class="text-lg font-bold mb-1">{item.titulo}</h3>
                <p class="text-sm text-white/80 line-clamp-2">{item.descripcion}</p>
                <div class="flex items-center justify-between mt-3">
                  <span class="text-xs bg-white/20 px-2 py-0.5 rounded-full">{item.subservicios.length} servicios</span>
                </div>
              </div>
            </div>

            <div
              class={`absolute left-0 right-0 top-full bg-white rounded-b-2xl popover-body border border-gray-200 ${isOpen ? 'open' : 'closed'}`}
              style={{ borderTop: `3px solid ${item.color.match(/from-\[(#\w+)\]/)?.[1] ?? '#ED7520'}` }}
              onMouseEnter={() => show(item.id)}
              onMouseLeave={scheduleHide}
            >
              <div class="px-5 pb-5 pt-3">
                <ul class="space-y-3">
                  {item.subservicios.map((sub, idx) => (
                    <li key={idx} class="text-sm text-gray-700 flex items-start gap-2">
                      <span class="text-green-500 mt-0.5 shrink-0">✓</span>
                      <span>{sub.titulo}</span>
                    </li>
                  ))}
                </ul>
                <div class="text-center pt-4 mt-4 border-t border-gray-100">
                  <WhatsAppButton
                    mensaje={`Estimado SofCruz requiero información sobre ${item.titulo}`}
                    texto="Solicitar cotización"
                    className="text-sm px-4 py-1.5"
                  />
                </div>
              </div>
            </div>
          </div>
        )
      })}
    </div>
  )
}
