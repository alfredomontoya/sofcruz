import { useState, useEffect } from 'react'

export default function Navbar() {
  const [isOpen, setIsOpen] = useState(false)
  const [scrolled, setScrolled] = useState(false)
  const [dark, setDark] = useState(false)

  useEffect(() => {
    setDark(document.documentElement.classList.contains('dark'))
    const onScroll = () => setScrolled(window.scrollY > 50)
    onScroll()
    globalThis.addEventListener('scroll', onScroll, { passive: true })
    return () => globalThis.removeEventListener('scroll', onScroll)
  }, [])

  const toggleDark = () => {
    const next = !dark
    setDark(next)
    document.documentElement.classList.toggle('dark', next)
    localStorage.setItem('sofcruz:theme', next ? 'dark' : 'light')
  }

  return (
    <nav className={`fixed top-0 left-0 right-0 z-50 transition-colors duration-300 ${scrolled ? 'bg-[#ed7520]' : 'bg-transparent'}`}>
      <div className="max-w-7xl mx-auto px-4">
        <div className="flex items-center justify-between h-16">
          <a href="#principal" className="text-white font-bold text-lg no-underline">SofCruz</a>

          <button
            className="md:hidden text-white p-2"
            onClick={() => setIsOpen(!isOpen)}
            aria-label="Toggle navigation"
            type="button"
          >
            <svg className="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              {isOpen ? (
                <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M6 18L18 6M6 6l12 12" />
              ) : (
                <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M4 6h16M4 12h16M4 18h16" />
              )}
            </svg>
          </button>

          <div className="hidden md:flex items-center gap-3">
            <button onClick={toggleDark} type="button" className="text-white hover:text-gray-200 p-1.5" aria-label="Toggle dark mode">
              {dark ? (
                <svg className="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />
                </svg>
              ) : (
                <svg className="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
                </svg>
              )}
            </button>
            <a href="#servicios" className="text-white hover:text-gray-200 no-underline">Servicios</a>
            <a href="#portafolio" className="text-white hover:text-gray-200 no-underline">Portafolio</a>
            <a href="#tienda" className="text-white hover:text-gray-200 no-underline">Tienda</a>
            <a href="#equipo" className="text-white hover:text-gray-200 no-underline">Equipo</a>
            <input
              type="text"
              placeholder="Buscar servicios…"
              className="px-3 py-1.5 rounded text-sm bg-white/20 text-white placeholder:text-white/70 border border-white/30 focus:outline-none focus:border-white/50"
              aria-label="Search"
              onInput={(e) => {
                const query = (e.target as HTMLInputElement).value.toLowerCase()
                window.dispatchEvent(new CustomEvent('sofcruz:search', { detail: { query } }))
              }}
            />
          </div>
        </div>

        {isOpen && (
          <div className="md:hidden pb-4 space-y-2">
            <div className="flex items-center gap-2">
              <button onClick={toggleDark} type="button" className="text-white hover:text-gray-200 p-1.5" aria-label="Toggle dark mode">
                {dark ? (
                  <svg className="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />
                  </svg>
                ) : (
                  <svg className="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
                  </svg>
                )}
              </button>
              <span className="text-white text-sm">Modo {dark ? 'claro' : 'oscuro'}</span>
            </div>
            <a href="#servicios" className="block text-white py-1 no-underline" onClick={() => setIsOpen(false)}>Servicios</a>
            <a href="#portafolio" className="block text-white py-1 no-underline" onClick={() => setIsOpen(false)}>Portafolio</a>
            <a href="#tienda" className="block text-white py-1 no-underline" onClick={() => setIsOpen(false)}>Tienda</a>
            <a href="#equipo" className="block text-white py-1 no-underline" onClick={() => setIsOpen(false)}>Equipo</a>
            <input
              type="text"
              placeholder="Buscar servicios…"
              className="w-full px-3 py-1.5 rounded text-sm bg-white/20 text-white placeholder:text-white/70 border border-white/30 focus:outline-none focus:border-white/50"
              aria-label="Search"
              onInput={(e) => {
                const query = (e.target as HTMLInputElement).value.toLowerCase()
                window.dispatchEvent(new CustomEvent('sofcruz:search', { detail: { query } }))
              }}
            />
          </div>
        )}
      </div>
    </nav>
  )
}
