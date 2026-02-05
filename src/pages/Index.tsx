import logoGrupoTP from "@/assets/logo-grupo-tp.png";

const Index = () => {
  const businessLinks = [
    {
      title: "Obras Residenciais",
      url: "#", // Substituir pelo link real
      description: "Projetos e construções residenciais de alto padrão",
    },
    {
      title: "Obras Industriais, Comerciais e Públicas",
      url: "#", // Substituir pelo link real
      description: "Soluções completas para grandes empreendimentos",
    },
    {
      title: "Consultoria Imobiliária",
      url: "#", // Substituir pelo link real
      description: "Assessoria especializada em investimentos imobiliários",
    },
  ];

  return (
    <div className="min-h-screen flex flex-col bg-background">
      {/* Main Content */}
      <main className="flex-1 flex flex-col items-center justify-center px-6 py-12">
        {/* Logo */}
        <div className="mb-16">
          <img
            src={logoGrupoTP}
            alt="Grupo TP - Tudo de Projetos"
            className="h-36 md:h-44 w-auto"
          />
        </div>

        {/* Buttons Container */}
        <div className="w-full max-w-2xl">
          <div className="border border-border rounded-sm p-8 md:p-12 bg-background shadow-sm">
            <div className="flex flex-col gap-5">
              {businessLinks.map((link, index) => (
                <a
                  key={index}
                  href={link.url}
                  target="_blank"
                  rel="noopener noreferrer"
                  className="group block w-full"
                >
                  <div className="border border-foreground rounded-sm px-6 py-4 text-center transition-all duration-300 hover:bg-foreground hover:border-foreground group-hover:shadow-md">
                    <span className="text-foreground font-medium tracking-wide text-sm md:text-base uppercase transition-colors duration-300 group-hover:text-background">
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
      <footer className="bg-foreground py-6 px-6">
        <div className="text-center">
          <p className="text-background text-sm tracking-wider">
            Grupo TP | Tudo de Projetos. Todos os direitos reservados.
          </p>
        </div>
      </footer>
    </div>
  );
};

export default Index;
