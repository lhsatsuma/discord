/*
 * Copyright (C) 2025 Luis Satsuma
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program. If not, see <https://www.gnu.org/licenses/>.
 */

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