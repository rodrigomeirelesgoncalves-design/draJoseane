import { MapPin } from 'lucide-react';

const LocationTags = () => {
  const regions = [
    'São Paulo - SP',
    'Rio de Janeiro - RJ',
    'Belo Horizonte - MG',
    'Curitiba - PR',
    'Porto Alegre - RS',
    'Salvador - BA',
    'Recife - PE',
    'Fortaleza - CE',
    'Brasília - DF',
    'Goiânia - GO',
    'Manaus - AM',
    'Cuiabá - MT',
    'Sorriso - MT',
    'Campo Grande - MS',
    'Florianópolis - SC',
    'Vitória - ES',
    'Belém - PA',
    'São Luís - MA',
    'Teresina - PI',
    'Natal - RN',
    'João Pessoa - PB',
    'Maceió - AL',
    'Aracaju - SE',
    'Palmas - TO',
    'Macapá - AP',
    'Rio Branco - AC',
    'Porto Velho - RO',
    'Boa Vista - RR',
    'Campinas - SP',
    'Ribeirão Preto - SP',
  ];

  return (
    <section className="bg-foreground text-background/70 py-8 border-t border-background/5">
      <div className="container mx-auto px-4">
        <div className="flex items-center gap-2 mb-4 justify-center">
          <MapPin size={16} className="text-primary" />
          <span className="text-sm font-medium text-primary">Atendimento Online para Todo o Brasil</span>
        </div>
        <div className="flex flex-wrap justify-center gap-2">
          {regions.map((region) => (
            <span
              key={region}
              className="text-xs px-3 py-1.5 rounded-full border border-background/10 hover:border-primary/40 hover:text-primary transition-colors cursor-default"
            >
              {region}
            </span>
          ))}
        </div>
      </div>
    </section>
  );
};

export default LocationTags;
