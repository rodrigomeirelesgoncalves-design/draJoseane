import { Button } from '@/components/ui/button';
import { MessageCircle, CalendarDays, Video, Sparkles } from 'lucide-react';

const HowItWorks = () => {
  const steps = [
    {
      icon: MessageCircle,
      number: '01',
      title: 'Primeiro Contato',
      description: 'Entre em contato pelo WhatsApp ou formulário. Vamos conversar sobre suas necessidades e agendar sua primeira sessão.',
    },
    {
      icon: CalendarDays,
      number: '02',
      title: 'Agendamento',
      description: 'Escolha o melhor horário para você. O atendimento é 100% online, proporcionando conforto e flexibilidade.',
    },
    {
      icon: Video,
      number: '03',
      title: 'Sessão Online',
      description: 'Realizamos a sessão por videochamada em ambiente seguro e sigiloso. Tudo no conforto da sua casa.',
    },
    {
      icon: Sparkles,
      number: '04',
      title: 'Transformação',
      description: 'Juntos, trabalhamos no seu desenvolvimento emocional, com técnicas eficazes e acompanhamento personalizado.',
    },
  ];

  return (
    <section id="como-funciona" className="section-padding bg-cream">
      <div className="container mx-auto px-4">
        <div className="text-center mb-12">
          <span className="inline-block px-4 py-2 bg-primary text-primary-foreground rounded-full text-sm font-medium mb-4">
            Como Funciona
          </span>
          <h2 className="font-serif text-3xl md:text-4xl font-bold text-foreground mb-4">
            Sua jornada de <span className="text-primary">transformação</span>
          </h2>
          <p className="text-muted-foreground max-w-2xl mx-auto">
            Um processo simples e acolhedor para você iniciar seu tratamento terapêutico.
          </p>
        </div>
        
        <div className="grid md:grid-cols-2 lg:grid-cols-4 gap-6 mb-12">
          {steps.map((step, index) => (
            <div key={index} className="relative">
              {/* Step number watermark */}
              <span className="absolute -top-2 left-4 font-serif text-6xl font-bold text-primary/10 z-0">
                {step.number}
              </span>
              
              <div className="relative bg-white p-6 pt-10 rounded-2xl shadow-sm border border-border z-10">
                <div className="w-14 h-14 mb-4 bg-primary text-primary-foreground rounded-xl flex items-center justify-center">
                  <step.icon size={24} />
                </div>
                <h3 className="font-semibold text-lg text-foreground mb-3">
                  {step.title}
                </h3>
                <p className="text-sm text-muted-foreground">
                  {step.description}
                </p>
              </div>
            </div>
          ))}
        </div>
        
        <div className="text-center">
          <Button asChild size="lg" className="bg-primary hover:bg-primary/90 text-primary-foreground text-lg px-8">
            <a
              href="https://wa.me/5566999340517?text=Olá!%20Gostaria%20de%20agendar%20uma%20consulta."
              target="_blank"
              rel="noopener noreferrer"
            >
              Começar Agora
            </a>
          </Button>
        </div>
      </div>
    </section>
  );
};

export default HowItWorks;
