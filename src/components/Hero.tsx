import { Button } from '@/components/ui/button';
import { Shield, Heart, MapPin } from 'lucide-react';
import draJoseane from '@/assets/dra-joseane.png';

const Hero = () => {
  const badges = [
    { icon: Shield, label: 'Sigilo Total' },
    { icon: Heart, label: 'Atendimento Humanizado' },
    { icon: MapPin, label: 'Todo o Brasil' },
  ];

  return (
    <section className="relative min-h-screen flex items-center pt-20 overflow-hidden">
      {/* Background Pattern */}
      <div className="absolute inset-0 bg-gradient-to-br from-cream via-background to-teal-light/30" />
      <div className="absolute top-0 right-0 w-1/2 h-full bg-gradient-to-l from-teal-light/50 to-transparent" />
      
      <div className="container mx-auto px-4 relative z-10">
        <div className="grid lg:grid-cols-2 gap-12 items-center">
          {/* Content */}
          <div className="animate-fade-in">
            <span className="inline-block px-4 py-2 bg-primary/10 text-primary rounded-full text-sm font-medium mb-6">
              Atendimento 100% Online
            </span>
            
            <h1 className="font-serif text-4xl md:text-5xl lg:text-6xl font-bold text-foreground leading-tight mb-6">
              Recupere o equilíbrio emocional e retome o controle da sua vida
            </h1>
            
            <p className="text-lg text-muted-foreground mb-8 max-w-xl">
              Especialista em ansiedade e traumas emocionais. Neurociência aplicada à psicoterapia com escuta acolhedora, ética e personalizada.
            </p>
            
            <div className="flex flex-col sm:flex-row gap-4 mb-10">
              <Button asChild size="lg" className="bg-primary hover:bg-primary/90 text-primary-foreground text-lg px-8">
                <a
                  href="https://wa.me/5566999340517?text=Olá!%20Gostaria%20de%20agendar%20uma%20consulta."
                  target="_blank"
                  rel="noopener noreferrer"
                >
                  Agendar Consulta
                </a>
              </Button>
              <Button asChild variant="outline" size="lg" className="text-lg px-8 border-primary text-primary hover:bg-primary/10">
                <a href="#sobre">Conhecer Mais</a>
              </Button>
            </div>
            
            {/* Badges */}
            <div className="flex flex-wrap gap-4">
              {badges.map((badge, index) => (
                <div
                  key={index}
                  className="flex items-center gap-2 px-4 py-2 bg-card rounded-full shadow-sm border border-border"
                >
                  <badge.icon size={18} className="text-primary" />
                  <span className="text-sm font-medium text-foreground">{badge.label}</span>
                </div>
              ))}
            </div>
          </div>
          
          {/* Image */}
          <div className="relative flex justify-center lg:justify-end animate-fade-in-right">
            <div className="relative">
              {/* Decorative elements */}
              <div className="absolute -top-6 -left-6 w-72 h-72 bg-primary/20 rounded-full blur-3xl" />
              <div className="absolute -bottom-6 -right-6 w-48 h-48 bg-gold/30 rounded-full blur-2xl" />
              
              {/* Main image */}
              <div className="relative bg-gradient-to-b from-teal-light to-primary/20 rounded-2xl p-4">
                <img
                  src={draJoseane}
                  alt="Dra. Joseane Souza - Neuropsicoterapeuta especializada em ansiedade e traumas"
                  className="relative z-10 rounded-xl w-full max-w-md object-cover"
                />
              </div>
              
              {/* Floating cards */}
              <div className="absolute -left-4 top-1/4 bg-card p-4 rounded-xl shadow-lg border border-border animate-float">
                <p className="text-xs text-muted-foreground mb-1">Especialista em</p>
                <p className="font-serif font-semibold text-primary">Ansiedade</p>
              </div>
              
              <div className="absolute -right-4 bottom-1/4 bg-card p-4 rounded-xl shadow-lg border border-border animate-float" style={{ animationDelay: '1s' }}>
                <p className="text-xs text-muted-foreground mb-1">Tratamento de</p>
                <p className="font-serif font-semibold text-primary">Traumas</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  );
};

export default Hero;
