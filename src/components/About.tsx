import draJoseane from '@/assets/dra-joseane.png';

const About = () => {
  const stats = [
    { value: '100%', label: 'Online' },
    { value: '+500', label: 'Pacientes' },
    { value: '5★', label: 'Avaliação' },
  ];

  return (
    <section id="sobre" className="section-padding bg-background">
      <div className="container mx-auto px-4">
        <div className="grid lg:grid-cols-2 gap-12 items-center">
          {/* Image */}
          <div className="relative">
            <div className="absolute inset-0 bg-gradient-to-br from-primary/20 to-gold/20 rounded-2xl transform rotate-3" />
            <img
              src={draJoseane}
              alt="Dra. Joseane Souza - Neuropsicoterapeuta"
              className="relative z-10 rounded-2xl w-full max-w-md mx-auto object-cover shadow-xl"
            />
          </div>
          
          {/* Content */}
          <div>
            <span className="inline-block px-4 py-2 bg-primary/10 text-primary rounded-full text-sm font-medium mb-4">
              Sobre Mim
            </span>
            
            <h2 className="font-serif text-3xl md:text-4xl font-bold text-foreground mb-6">
              Ajudo você a retomar o controle da sua vida
            </h2>
            
            <div className="space-y-4 text-muted-foreground">
              <p>
                Sou Neuropsicoterapeuta especializada em ansiedade e traumas emocionais, com atendimento online para adultos em Sorriso – MT e todo o Brasil.
              </p>
              <p>
                Ajudo pessoas que sofrem com <strong className="text-foreground">ansiedade, crises emocionais, medos, insegurança, sobrecarga mental</strong> e impactos de experiências traumáticas a retomarem o equilíbrio emocional e o controle da própria vida.
              </p>
              <p>
                Meu trabalho é baseado na <strong className="text-foreground">neurociência aplicada à psicoterapia</strong>, integrando técnicas terapêuticas eficazes com uma escuta acolhedora, ética e personalizada, respeitando o ritmo, a história e o corpo de cada paciente.
              </p>
            </div>
            
            {/* Stats */}
            <div className="grid grid-cols-3 gap-6 mt-8 pt-8 border-t border-border">
              {stats.map((stat, index) => (
                <div key={index} className="text-center">
                  <p className="font-serif text-3xl font-bold text-primary">{stat.value}</p>
                  <p className="text-sm text-muted-foreground mt-1">{stat.label}</p>
                </div>
              ))}
            </div>
          </div>
        </div>
      </div>
    </section>
  );
};

export default About;
