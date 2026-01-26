import { Heart } from 'lucide-react';

const Footer = () => {
  return (
    <footer className="bg-foreground text-background py-12">
      <div className="container mx-auto px-4">
        <div className="flex flex-col md:flex-row items-center justify-between gap-6">
          <div>
            <h3 className="font-serif text-xl font-semibold mb-2">Dra. Joseane Souza</h3>
            <p className="text-background/70 text-sm">Neuropsicoterapeuta • CRP 18/XXXXX</p>
          </div>
          
          <div className="flex items-center gap-1 text-sm text-background/70">
            <span>Feito com</span>
            <Heart size={16} className="text-primary fill-primary" />
            <span>para sua saúde mental</span>
          </div>
          
          <div className="text-sm text-background/70">
            © {new Date().getFullYear()} Todos os direitos reservados.
          </div>
        </div>
      </div>
    </footer>
  );
};

export default Footer;
