import { Heart, Instagram, Linkedin, Mail } from 'lucide-react';

const Footer = () => {
  const quickLinks = [
    { href: '#', label: 'Início' },
    { href: '#sobre', label: 'Sobre' },
    { href: '#especialidades', label: 'Especialidades' },
    { href: '#depoimentos', label: 'Depoimentos' },
    { href: '#contato', label: 'Contato' },
  ];

  return (
    <footer className="bg-foreground text-background">
      {/* Main Footer */}
      <div className="container mx-auto px-4 py-12">
        <div className="grid md:grid-cols-3 gap-10">
          {/* Brand */}
          <div>
            <div className="flex items-center gap-3 mb-4">
              <div className="w-10 h-10 rounded-full bg-primary flex items-center justify-center">
                <span className="text-primary-foreground font-serif font-bold text-lg">J</span>
              </div>
              <div>
                <h3 className="font-serif text-lg font-semibold">Joseane Souza</h3>
                <p className="text-sm text-primary">Neuropsicoterapeuta</p>
              </div>
            </div>
            <p className="text-background/70 text-sm mb-6">
              Especialista em ansiedade e traumas emocionais. Neurociência aplicada à psicoterapia com atendimento 100% online para todo o Brasil.
            </p>
            <div className="flex gap-3">
              <a href="#" className="w-10 h-10 rounded-full bg-background/10 flex items-center justify-center hover:bg-background/20 transition-colors">
                <Instagram size={18} />
              </a>
              <a href="#" className="w-10 h-10 rounded-full bg-background/10 flex items-center justify-center hover:bg-background/20 transition-colors">
                <Linkedin size={18} />
              </a>
              <a href="mailto:contato@drajoseanesouza.com.br" className="w-10 h-10 rounded-full bg-background/10 flex items-center justify-center hover:bg-background/20 transition-colors">
                <Mail size={18} />
              </a>
            </div>
          </div>
          
          {/* Quick Links */}
          <div>
            <h4 className="font-semibold text-lg mb-4">Links Rápidos</h4>
            <ul className="space-y-3">
              {quickLinks.map((link, index) => (
                <li key={index}>
                  <a href={link.href} className="text-background/70 hover:text-background transition-colors text-sm">
                    {link.label}
                  </a>
                </li>
              ))}
            </ul>
          </div>
          
          {/* Contact */}
          <div>
            <h4 className="font-semibold text-lg mb-4">Contato</h4>
            <ul className="space-y-3 text-sm text-background/70">
              <li>Sorriso - MT</li>
              <li>Atendimento Online</li>
              <li>contato@drajoseanesouza.com.br</li>
              <li>(66) 99934-0517</li>
            </ul>
          </div>
        </div>
      </div>
      
      {/* Bottom Bar */}
      <div className="border-t border-background/10">
        <div className="container mx-auto px-4 py-6">
          <div className="flex flex-col md:flex-row items-center justify-between gap-4">
            <p className="text-sm text-background/70">
              © {new Date().getFullYear()} Dra. Joseane Souza. Todos os direitos reservados.
            </p>
            <div className="flex items-center gap-1 text-sm text-background/70">
              <span>Feito com</span>
              <Heart size={14} className="text-primary fill-primary" />
              <span>para sua saúde mental</span>
            </div>
          </div>
        </div>
      </div>
    </footer>
  );
};

export default Footer;
