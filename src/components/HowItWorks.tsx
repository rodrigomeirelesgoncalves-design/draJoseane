import { Button } from '@/components/ui/button';

const HowItWorks = () => {
  const steps = [
    {
      number: '01',
      title: 'Primeiro Contato',
      description: 'Entre em contato pelo WhatsApp ou formulário. Vamos conversar sobre suas necessidades e agendar sua primeira sessão.',
    },
    {
      number: '02',
      title: 'Agendamento',
      description: 'Escolha o melhor horário para você. O atendimento é 100% online, proporcionando conforto e flexibilidade.',
    },
    {
      number: '03',
      title: 'Sessão Online',
      description: 'Realizamos a sessão por videochamada em ambiente seguro e sigiloso. Tudo no conforto da sua casa.',
    },
    {
      number: '04',
      title: 'Transformação',
      description: 'Juntos, trabalhamos no seu desenvolvimento emocional, com técnicas eficazes e acompanhamento personalizado.',
    },
  ];

  return (
    <section id="como-funciona" className="section-padding bg-background">
      <div className="container mx-auto px-4">
        <div className="text-center mb-12">
          <span className="inline-block px-4 py-2 bg-primary/10 text-primary rounded-full text-sm font-medium mb-4">
            Como Funciona
          </span>
          <h2 className="font-serif text-3xl md:text-4xl font-bold text-foreground mb-4">
            Sua jornada de transformação
          </h2>
          <p className="text-muted-foreground max-w-2xl mx-auto">
            Um processo simples e acolhedor para você iniciar seu tratamento terapêutico.
          </p>
        </div>
        
        <div className="grid md:grid-cols-2 lg:grid-cols-4 gap-8 mb-12">
          {steps.map((step, index) => (
            <div key={index} className="relative">
              {/* Connector line */}
              {index < steps.length - 1 && (
                <div className="hidden lg:block absolute top-8 left-1/2 w-full h-0.5 bg-gradient-to-r from-primary/50 to-primary/20" />
              )}
              
              <div className="relative bg-card p-6 rounded-xl shadow-sm border border-border text-center">
                <div className="w-16 h-16 mx-auto mb-4 bg-primary text-primary-foreground rounded-full flex items-center justify-center font-serif text-xl font-bold">
                  {step.number}
                </div>
                <h3 className="font-serif text-lg font-semibold text-foreground mb-3">
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
            <a href="#contato">Começar Agora</a>
          </Button>
        </div>
      </div>
    </section>
  );
};

export default HowItWorks;
