import logoGrupoTP from "@/assets/logo-grupo-tp.png";

const Index = () => {
  const businessLinks = [
    {
      title: "Obras Residenciais",
      url: "#", // Substituir pelo link real
    },
    {
      title: "Obras Industriais, Comerciais e Públicas",
      url: "#", // Substituir pelo link real
    },
    {
      title: "Consultoria Imobiliária",
      url: "#", // Substituir pelo link real
    },
  ];

  return (
    <div className="min-h-screen min-h-[100dvh] flex flex-col bg-background">
      {/* Main Content */}
      <main className="flex-1 flex flex-col items-center justify-center px-4 sm:px-6 py-8 sm:py-12">
        {/* Logo */}
        <div className="mb-10 sm:mb-16">
          <img
            src={logoGrupoTP}
            alt="Grupo TP - Tudo de Projetos"
            className="h-40 sm:h-52 md:h-64 w-auto"
          />
        </div>

        {/* Buttons Container */}
        <div className="w-full max-w-md sm:max-w-lg md:max-w-2xl">
          <div className="border border-border rounded-sm p-5 sm:p-8 md:p-12 bg-background shadow-sm">
            <div className="flex flex-col gap-4 sm:gap-5">
              {businessLinks.map((link, index) => (
                <a
                  key={index}
                  href={link.url}
                  target="_blank"
                  rel="noopener noreferrer"
                  className="group block w-full"
                >
                  <div className="border border-foreground rounded-sm px-4 sm:px-6 py-3 sm:py-4 text-center transition-all duration-300 hover:bg-foreground hover:border-foreground group-hover:shadow-md active:scale-[0.98]">
                    <span className="text-foreground font-medium tracking-wide text-xs sm:text-sm md:text-base uppercase transition-colors duration-300 group-hover:text-background leading-tight block">
                      {link.title}
                    </span>
                  </div>
                </a>
              ))}
            </div>
          </div>
        </div>
      </main>

      {/* Footer */}
      <footer className="bg-foreground py-4 sm:py-6 px-4 sm:px-6">
        <div className="text-center">
          <p className="text-background text-xs sm:text-sm tracking-wider leading-relaxed">
            Grupo TP | Tudo de Projetos. Todos os direitos reservados.
          </p>
        </div>
      </footer>
    </div>
  );
};

export default Index;
