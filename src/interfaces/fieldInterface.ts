export const fieldTypeInterface = {
    uuid: 1,
    datetime: 2,
    number: 4,
    string: 8,
    boolean: 16,
    text: 32,
} as const;

export type fieldTypeInterface = typeof fieldTypeInterface[keyof typeof fieldTypeInterface];

export interface fieldInterface
{
    label: string;
    type: fieldTypeInterface;
    pk?: boolean;
    minLength?: number;
    maxLength?: number;
    default?: any;
}