import { Star } from 'lucide-react';

const Testimonials = () => {
  const testimonials = [
    {
      name: 'Maria C.',
      location: 'São Paulo, SP',
      initial: 'M',
      text: 'A Dra. Joseane mudou minha vida. Depois de anos lutando contra ansiedade, finalmente encontrei paz. O atendimento online é muito prático e a sessão flui naturalmente.',
    },
    {
      name: 'Pedro R.',
      location: 'Cuiabá, MT',
      initial: 'P',
      text: 'Profissional incrível! Me ajudou a superar traumas que carregava há anos. A abordagem dela é acolhedora e baseada em ciência. Recomendo demais!',
    },
    {
      name: 'Ana L.',
      location: 'Sorriso, MT',
      initial: 'A',
      text: 'O tratamento com a Dra. Joseane foi transformador. Ela tem uma forma única de trabalhar, respeitando meu tempo e minha história. Gratidão eterna.',
    },
  ];

  return (
    <section id="depoimentos" className="section-padding bg-gradient-to-b from-muted/30 to-background">
      <div className="container mx-auto px-4">
        <div className="text-center mb-12">
          <span className="inline-block px-4 py-2 bg-primary/10 text-primary rounded-full text-sm font-medium mb-4">
            Depoimentos
          </span>
          <h2 className="font-serif text-3xl md:text-4xl font-bold text-foreground mb-4">
            O que dizem meus pacientes
          </h2>
          <p className="text-muted-foreground max-w-2xl mx-auto">
            Histórias reais de transformação e superação.
          </p>
        </div>
        
        <div className="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
          {testimonials.map((testimonial, index) => (
            <div
              key={index}
              className="bg-card p-6 rounded-xl shadow-sm border border-border hover:shadow-lg transition-shadow"
            >
              {/* Stars */}
              <div className="flex gap-1 mb-4">
                {[...Array(5)].map((_, i) => (
                  <Star key={i} size={18} className="fill-gold text-gold" />
                ))}
              </div>
              
              {/* Quote */}
              <p className="text-muted-foreground mb-6 italic">
                "{testimonial.text}"
              </p>
              
              {/* Author */}
              <div className="flex items-center gap-3">
                <div className="w-12 h-12 bg-primary/10 rounded-full flex items-center justify-center">
                  <span className="font-serif text-lg font-semibold text-primary">
                    {testimonial.initial}
                  </span>
                </div>
                <div>
                  <p className="font-semibold text-foreground">{testimonial.name}</p>
                  <p className="text-sm text-muted-foreground">{testimonial.location}</p>
                </div>
              </div>
            </div>
          ))}
        </div>
      </div>
    </section>
  );
};

export default Testimonials;
