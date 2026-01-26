import { Button } from '@/components/ui/button';
import { Heart, MonitorPlay, ArrowRight } from 'lucide-react';
import draJoseane from '@/assets/dra-joseane.png';

const Hero = () => {
  return (
    <section className="relative min-h-screen flex items-center pt-20 overflow-hidden bg-background">
      <div className="container mx-auto px-4 relative z-10">
        <div className="grid lg:grid-cols-2 gap-12 items-center">
          {/* Content */}
          <div className="animate-fade-in">
            <span className="inline-flex items-center gap-2 px-4 py-2 border border-primary/30 text-primary rounded-full text-sm font-medium mb-6">
              <MonitorPlay size={16} />
              Atendimento 100% Online
            </span>
            
            <h1 className="font-serif text-4xl md:text-5xl lg:text-6xl font-bold text-foreground leading-tight mb-6">
              Recupere o{' '}
              <span className="text-primary relative">
                equilíbrio emocional
                <svg className="absolute -bottom-2 left-0 w-full" viewBox="0 0 300 12" fill="none">
                  <path d="M2 8C50 4 150 2 298 8" stroke="hsl(var(--gold))" strokeWidth="4" strokeLinecap="round" opacity="0.6"/>
                </svg>
              </span>{' '}
              e retome o controle da sua vida
            </h1>
            
            <p className="text-lg text-muted-foreground mb-8 max-w-xl">
              Especialista em ansiedade e traumas emocionais. Neurociência aplicada à psicoterapia com escuta acolhedora, ética e personalizada.
            </p>
            
            <div className="flex flex-col sm:flex-row gap-4">
              <Button asChild size="lg" className="bg-primary hover:bg-primary/90 text-primary-foreground text-lg px-8 gap-2">
                <a
                  href="https://wa.me/5566999340517?text=Olá!%20Gostaria%20de%20agendar%20uma%20consulta."
                  target="_blank"
                  rel="noopener noreferrer"
                >
                  Agendar Consulta
                  <ArrowRight size={18} />
                </a>
              </Button>
              <Button asChild variant="outline" size="lg" className="text-lg px-8 border-foreground/20 text-foreground hover:bg-foreground/5">
                <a href="#sobre">Conhecer Mais</a>
              </Button>
            </div>
          </div>
          
          {/* Image */}
          <div className="relative flex justify-center lg:justify-end animate-fade-in-right">
            <div className="relative">
              {/* Decorative arc */}
              <div className="absolute -top-4 -right-4 w-[calc(100%+2rem)] h-[calc(100%+2rem)] border-2 border-muted rounded-full" />
              
              {/* Main image - circular */}
              <div className="relative w-80 h-80 md:w-96 md:h-96 rounded-full overflow-hidden border-4 border-white shadow-2xl">
                <img
                  src={draJoseane}
                  alt="Dra. Joseane Souza - Neuropsicoterapeuta especializada em ansiedade e traumas"
                  className="w-full h-full object-cover object-top"
                />
              </div>
              
              {/* Floating cards */}
              <div className="absolute -left-4 top-1/4 bg-white p-3 rounded-xl shadow-lg border border-border animate-float flex items-center gap-3">
                <div className="w-10 h-10 rounded-full bg-teal-light flex items-center justify-center">
                  <Heart size={18} className="text-primary" />
                </div>
                <div>
                  <p className="text-xs text-muted-foreground">Especialista em</p>
                  <p className="font-semibold text-foreground">Ansiedade</p>
                </div>
              </div>
              
              <div className="absolute -right-4 bottom-1/4 bg-white p-3 rounded-xl shadow-lg border border-border animate-float flex items-center gap-3" style={{ animationDelay: '1s' }}>
                <div className="w-10 h-10 rounded-full bg-destructive/10 flex items-center justify-center">
                  <div className="w-4 h-4 rounded-full border-2 border-destructive/60" />
                </div>
                <div>
                  <p className="text-xs text-muted-foreground">Tratamento de</p>
                  <p className="font-semibold text-foreground">Traumas</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  );
};

export default Hero;
